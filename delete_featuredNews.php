<?php
    $id=$_GET['id'];
    
    include('connection.php');
    
    $sql = mysqli_query($conn, "DELETE FROM featured_news WHERE id = '$id' ");
?>