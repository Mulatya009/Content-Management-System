<?php
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Cyrus Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Cyrus Project" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- Plugins css -->
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="pt-2">

        <!-- Navigation Bar-->

        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="container "style="box-shadow: -1px 7px 12px 3px rgba(0,0,0,0.25);" >
            <div class="row m-4">
                
                <?php
                
                    require 'connection.php';
                    
                    // fetch
                    $sql= mysqli_query($conn, "SELECT * FROM latest_music WHERE id = '$id'");  
                    
                    $row = mysqli_fetch_assoc($sql);
                ?>
                
                <div class="">
                    <div class="content-wrapper pt-3">
                        <button type="button" class="btn btn-gradient-info btn-sm bg-secondary">Back</button><br><br>
                        <small> <?php echo $row['post_date']; ?></small>
                        <div class="form-inline">
                        <i class="mdi mdi-arrow-right-drop-circle text-danger mt-1"></i>
                        <span style="font-size: 12px;" class="ml-1">stream</span>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mt-2">
                                 <p style="font-size: 15px;"><b><?php echo $row['title']; ?></b></p> 
                            </div>
                            <div class="mt-2">
                                <img style = "width: 650px; height: 400px;" class="img-fluid" src="<?php echo $row['image_banner']; ?>" alt="">
                            </div>
                            <hr>
                            <div class="mt-2">
                                <p style="font-size: 12px;"><?php echo $row['description']; ?>.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mt-2 mb-1">
                                <p style="font-size: 14px;"><b>Related News</b></p>
                            </div>
                            
                            <?php
                
                                require 'connection.php';
                                
                                // fetch
                                $sql= mysqli_query($conn, "SELECT * FROM latest_music WHERE id != '$id'"); 
                                
                                if(mysqli_num_rows($sql) > 0){
                                
                                    while($row = mysqli_fetch_assoc($sql)){
                                ?>
                                
                                    <div class="row">
                                        <div class="mt-2 col-6">
                                            <img style = "width: 180px; height: 100px;" class="img-fluid rounded" src="<?php echo $row['image_square']; ?>" alt="">
                                        </div>
                                        <div class="mt-2 col-6" style="">
                                            <p style="font-size: 12px; text-decoration: underline; cursor: pointer;"><?php echo $row['title']; ?></p>
                                        </div>                            
                                    </div>
                                
                                <?php
                                    }
                                }else{
                                    ?>
                                    
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <span class="alert-icon"><i class="fe-x"></i></span>
                                        <span class="alert-text"><strong>No records found!</strong></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    
                                    <?php
                                }
                                ?>

                           
                        </div>
                    </div>    
                </div>
                
 
            </div> 
        
        </div>
        
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <?php
            include('footer.php');
        ?>
        <!-- end Footer -->

        <!-- Right Sidebar -->
        <?php
            include('sidebar.php');
        ?>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/dark-horizontal/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 16:32:46 GMT -->
</html>