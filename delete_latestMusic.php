<?php 
    $id=$_GET['id'];
    
    include('connection.php');
    
    $sql = mysqli_query($conn, "DELETE FROM latest_music WHERE id = '$id' ");
?>