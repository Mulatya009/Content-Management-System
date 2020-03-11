<?php
    $id = $_GET['id'];
    
    include('connection.php');
    
    $sql = mysqli_query($conn, "DELETE FROM news WHERE id = '$id'");
    
    if($sql){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
            <span class="alert-text"><strong>News deleted!.</strong></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	</div>
        <?php
    }else{
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
            <span class="alert-text"><strong>Sorry, </strong> news not deleted!.</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	</div>
        <?php
    }

?>