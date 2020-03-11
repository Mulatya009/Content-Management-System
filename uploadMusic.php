<?php 

if($_POST) {
	// database connection
	 include('connection.php');

	// check db connection
	if($conn->connect_error) {
		die("Connection Failed : " . $conn->connect_error);
	} 
	else { 
		// echo "Successfully Connected";
	}

	$valid = array('success' => false, 'messages' => array());

    $title = addslashes($_POST['title']);
	$description = addslashes($_POST['description']);
	$video_url = addslashes($_POST['video_url']);
	$status = "0";

	$type = explode('.', $_FILES['userImage']['name']);
	$type = $type[count($type) - 1];
	$url = 'uploads/' . uniqid(rand()) . '.' . $type;
	
	$type_banner = explode('.', $_FILES['userImage_banner']['name']);
	$type_banner = $type_banner[count($type_banner) - 1];
	$url_banner = 'uploads/' . uniqid(rand()) . '.' . $type_banner;

	if(in_array($type, array('jpg', 'jpeg', 'png', 'svg', 'gif', 'PNG')) && in_array($type_banner, array('jpg', 'jpeg', 'png', 'svg', 'gif', 'PNG'))) {
		if(is_uploaded_file($_FILES['userImage']['tmp_name']) && is_uploaded_file($_FILES['userImage_banner']['tmp_name'])) {
			if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url) && move_uploaded_file($_FILES['userImage_banner']['tmp_name'], $url_banner)) {

				// insert into database
				$sql = "INSERT INTO music (title, description, video_url, image_square, image_banner, status) VALUES ('$title', '$description', '$video_url', '$url', '$url_banner', '$status')";

				if($conn->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['message'] = "Music published successifully.";
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
		$valid['message'] = " Only upload (.jpg, .jpeg, .png, .svg, .gif, .PNG) files.";
	}

	echo json_encode($valid);

	// upload the file 
}