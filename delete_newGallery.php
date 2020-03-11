<?php
$id= $_GET['id'];

include('connection.php');

$sql = mysqli_query($conn, "DELETE FROM new_gallery WHERE id = '$id' ");