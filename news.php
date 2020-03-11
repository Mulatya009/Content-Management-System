<?php
    include('connection.php');
    
    // fetch
    $sql= mysqli_query($conn, "SELECT * FROM news");    
?>

<!DOCTYPE html>
<html lang="en">
    
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
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

    <body>

        <!-- Navigation Bar-->
        <?php
            include('header.php');
        ?>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <!-- Mirrored from coderthemes.com/ubold/layouts/dark-horizontal/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 16:33:32 GMT -->
<head>
        
        <title>Cyrus Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Cyrus Project" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <style type="text/css">
        .col-2dot4,
        .col-sm-2dot4,
        .col-md-2dot4,
        .col-lg-2dot4,
        .col-xl-2dot4 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-2dot4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%;
        }
        @media (max-width: 540px) {
            .col-sm-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        @media (min-width: 540px) {
            .col-sm-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        @media (min-width: 720px) {
            .col-md-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media (min-width: 960px) {
            .col-lg-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 30%;
                flex: 0 0 30%;
                max-width: 30%;
            }
        }
        @media (min-width: 1140px) {
            .col-xl-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }
    </style>

    <body>

        <!-- Navigation Bar-->
        <?php
            include('header.php');
        ?>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <!-- <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Success</button> -->
                                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="mdi mdi-file-plus mr-1"></i>News</button>
                            </div>
                            <h4 class="page-title">News</h4>
                        </div>
                    </div>
                </div>  
                
                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-capitalize">upload news</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body p-4">

                                <div id="n_messages"> 

                                </div>

                                <form action="uploadNews.php" method="post" enctype="multipart/form-data" id="uploadImageForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEmail4">Reporter</label>
                                                <input type="text" name="reporter" class="form-control" id="inputEmail4" placeholder="Reporter" style="font-size: 12px; height: 45px;" required>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputPassword4">Title</label>
                                                <input type="text" name="title" class="form-control" id="inputPassword4" placeholder="Title" style="font-size: 12px; height: 45px;" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="inputAddress">Description</label>
                                                <textarea name="description" class="form-control" id="inputAddress" rows="4" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Video upload</label>
                                                <div class="input-group col-xs-12">
                                                <input type="text" name="video_url" class="form-control file-upload-info" placeholder="Upload video"  style="font-size: 12px; height: 45px;" required>
                                                <!--<span class="input-group-append">-->
                                                <!--    <button class="file-upload-browse btn btn-info" type="button">Upload</button>-->
                                                <!--</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <p style="font-size: 12px; color: #27367F;">Square thumbnail</p>
                                                    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

                                                        <div class="kv-avatar center-block" style="width:200px">
                                                        <input id="avatar-2" name="userImage" type="file" class="file-loading">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p style="font-size: 12px; color: #27367F;">Banner thumbnail</p>
                                                    <div id="kv-avatar-errors-3" class="center-block" style="width:1200px;display:none"></div>

                                                        <div class="kv-avatar center-block" style="width:200px">
                                                        <input id="avatar-3" name="userImage_banner" type="file" class="file-loading">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-info">Publish</button>
                                    </div>
                                </form>
                            </div>
                            <!--<div class="modal-footer">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div><!-- /.modal -->
                <!-- end page title --> 
                <div id="delete_messages">
                </div>
               
                <div class="row">
                    <?php
                        while($row = mysqli_fetch_assoc($sql)){
                            $cover = $row['banner_image'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $status = $row['status'];
                            $id = $row['id'];
                            
                            ?>
                            <div class="col-2dot4 col-sm-2dot4 col-md-2dot4 col-lg-2dot4 col-xl-2dot4 col-md-6">
                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img img-fluid" src="<?php echo $cover;?>" alt="Card image" style"height: 180px;">
                                    <div class="card-img-overlay">
                                        <?php
                                            if($status == 1){
                                                ?>
                                                <a href="unpublishNews.php?id=<?php echo $id;?>"><span class="badge badge-pill badge-primary card-title" style="margin-top: -10px;">Published</span></a>
                                                <?php
                                            }else{
                                                ?>
                                                <a href="publishNews.php?id=<?php echo $id;?>"><span class="badge badge-pill badge-warning card-title" style="margin-top: -10px;">Unpublished</span></a>
                                                <?php
                                            }
                                        ?>
                                        
                                    </div>
                                    
                                    <div class="card-body">
                                        <h5 class="card-title text-capitalize"><?php echo implode(' ', array_slice(explode(' ', $title), 0, 3))."\n";?></h5>
                                        <p class="card-text text-lowercase"><?php echo implode(' ', array_slice(explode(' ', $description), 0, 4))."\n";?>...</p>
                                        <div class="row">
                                            <div class="col-md-10">
                                                
                                                    <span>view</span>
                                                    <span><a href="viewNews.php?id=<?php echo $row['id']?>"><i class="mdi mdi-eye-check-outline"></i></a></span>
                                                
                                            </div>
                                            <div class="col-md-2">
                                                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <span><i class="fas fa-ellipsis-v" style="color: #aaa;"></i></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <!-- item-->
                                                    <a href="edit_news.php?id=<?php echo $row['id']?>" class="dropdown-item">
                                                        <i class="fas fa-file-signature mr-1"></i>
                                                        <span>Edit</span>
                                                    </a>
                        
                                                    <div class="dropdown-divider"></div>
                        
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item delete_user" data-id="<?php echo $row['id']?>">
                                                        <i class="fas fa-trash mr-1"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <?php
                        }
                    ?>
                    
                    
                    
                </div>
                <!-- end row -->


            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        
        

                
    
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

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
        <script src="assets/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>	
        <script src="assets/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>	
        <script src="assets/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
        <script src="assets/fileinput/js/fileinput.min.js"></script>
        <!--sweetalert popup-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <!--delete-->
        
        <script>
          $('.delete_user').click(function(){
                var d_id = $(this).attr('data-id');
                // alert(d_id);
                  swal({
                    title: 'Do you want to delete news?',
                    text: "This record will be deleted permanently!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                    
                        $.ajax({url:"delete_news.php?id="+d_id,cache:false,success:function(responses){
                            swal({
                                title: "Done",
                                text: "The news has been deleted!",
                                icon: "success",
                                button: "Back",
                            });
                            setTimeout(location.reload.bind(location), 3000);
                        }});
                    } else {
                        swal({
                                title: "Cancelled",
                                text: "Your news is safe!",
                                icon: "info",
                                button: "Exit",
                            });
                    }
                })
                
            })
        </script>

        <!-- Dashboar 1 init js-->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <script type="text/javascript">
			
    		$("#avatar-2").fileinput({
    	    overwriteInitial: true,
    	    maxFileSize: 1500,
    	    showClose: false,
    	    showCaption: false,
    	    showBrowse: false,
    	    browseOnZoneClick: true,
    	    removeLabel: '',
    	    removeIcon: '<i class="fe-x" style="color: #fff;"></i>',
    	    removeTitle: 'Cancel or reset changes',
    	    elErrorContainer: '#kv-avatar-errors-2',
    	    msgErrorClass: 'alert alert-block alert-danger',
    	    defaultPreviewContent: '<img src="assets/images/square.png" alt="Your Avatar" style="width:125px; border-radius: 5px;"><h6 class="text-muted">Click to select square size</h6>',
    	    layoutTemplates: {main2: '{preview} {remove} {browse}'},
    	    allowedFileExtensions: ["jpg", "jpeg", "png", "svg", "gif", "PNG"]
    		});
    		
    		
    		$("#avatar-3").fileinput({
    	    overwriteInitial: true,
    	    maxFileSize: 1500,
    	    showClose: false,
    	    showCaption: false,
    	    showBrowse: false,
    	    browseOnZoneClick: true,
    	    removeLabel: '',
    	    removeIcon: '<i class="fe-x"></i>',
    	    removeTitle: 'Cancel or reset changes',
    	    elErrorContainer: '#kv-avatar-errors-3',
    	    msgErrorClass: 'alert alert-block alert-danger',
    	    defaultPreviewContent: '<img src="assets/images/banner.png" alt="Your Avatar" style="width:293px; height: 125px; border-radius: 5px;"><h6 class="text-muted">Click to select banner size</h6>',
    	    layoutTemplates: {main2: '{preview} {remove} {browse}'},
    	    allowedFileExtensions: ["jpg", "jpeg", "png", "svg", "gif", "PNG"]
    		});


            $(document).ready(function() {
                $("#uploadImageForm").unbind('submit').bind('submit', function() {

                    var form = $(this);
                    var formData = new FormData($(this)[0]);

                    $.ajax({
                        url: form.attr('action'),
                        type: form.attr('method'),
                        data: formData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: false,
                        success:function(responses) {
                            if(responses.success == true) {
                

                $("#n_messages").html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                '<span class="alert-icon"><i class="fe-check"></i></span>'+
                '<span class="alert-text"><strong>Thank you!,</strong> '+
                responses.message + '</span>'+

                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '</div>');

                                $('input[type="text"]').val('');
                                $(".fileinput-remove-button").click();
                            }
                            else {

                $("#n_messages").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                '<span class="alert-icon"><i class="fe-x"></i></span>'+
                '<span class="alert-text"><strong>Sorry!,</strong> '+
                responses.message + '</span>'+

                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '</div>');
                            }
                        }
                    });

                    return false;
                });
            });

        </script>
        
    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/dark-horizontal/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 16:32:46 GMT -->
</html>