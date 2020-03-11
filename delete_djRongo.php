<?php
$id= $_GET['id'];

include('connection.php');

$sql = mysqli_query($conn, "DELETE FROM dj_rongo WHERE id = '$id' ");
?>