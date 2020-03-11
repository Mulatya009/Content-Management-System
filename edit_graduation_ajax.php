<?php 

$id = $_GET['id'];

if($_POST) {
	// database connection
	require 'connection.php';

	// check db connection
	if($conn->connect_error) {
		die("Connection Failed : " . $conn->connect_error);
	} 
	else {
		// echo "Successfully Connected";
	}

	$valid = array('success' => false, 'messages' => array());
    
    $reporter = addslashes($_POST['reporter']);
    $title = addslashes($_POST['title']);
    $description = addslashes($_POST['description']);
	$category = addslashes($_POST['category']);
	$video_url = addslashes($_POST['video_url']);
	$status = "1";
	$type="";

	$type = explode('.', $_FILES['userImage']['name']);
	$type = $type[count($type) - 1];
	$url = 'uploads/' . uniqid(rand()) . '.' . $type;

	$type_banner = explode('.', $_FILES['userImage_banner']['name']);
	$type_banner = $type_banner[count($type_banner) - 1];
	$url_banner = 'uploads/' . uniqid(rand()) . '.' . $type_banner;

	if(in_array($type, array('')) && in_array($type_banner, array(''))){
	    $sql = "UPDATE graduation SET title='$title', description='$description', type='$type', category='$category', video_url='$video_url', status='$status' WHERE id='$id'";
	    
	    if($conn->query($sql) === TRUE) {
			$valid['success'] = true;
			$valid['message'] = "news updated successifully.";
		} 
		else {
			$valid['success'] = false;
			$valid['message'] = "Error while uploading";
		}

		$conn->close();
	}
	
	else if(in_array($type, array('jpg', 'jpeg', 'png')) && in_array($type_banner, array('jpg', 'jpeg', 'png'))) {
		if(is_uploaded_file($_FILES['userImage']['tmp_name']) && is_uploaded_file($_FILES['userImage_banner']['tmp_name'])) {
			if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url) && move_uploaded_file($_FILES['userImage_banner']['tmp_name'], $url_banner)) {

				// insert into database
				$sql = "UPDATE graduation SET title='$title', description='$description', type='$type', category='$category', video_url='$video_url', image_square='$url', image_banner='$url_banner', status='$status' WHERE id='$id'";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['message'] = "news updated successifully.";
				} 
				else {
					$valid['success'] = false;
					$valid['message'] = "Error while uploading";
				}

				$conn->close();

			}
			else {
				$valid['success'] = false;
				$valid['message'] = "Error while uploading";
			}
		}
	}
	else {
		$valid['success'] = false;
		$valid['message'] = " Only upload (.jpg, .jpeg, .png) files.";
	}

	echo json_encode($valid);

	// upload the file 
}