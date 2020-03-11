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
                            <h4 class="page-title">Users</h4>
                        </div>
                    </div>
                </div>     

                <div class="row">
                    <div class="col-xl-7">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Add user</h4>
                            <form action="#" class="parsley-examples">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="userName">User Name<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                   placeholder="Enter user name" class="form-control" id="userName">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="email" name="email" parsley-trigger="change" required
                                                   placeholder="Enter email" class="form-control" id="emailAddress">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p style="font-size: 12px; color: #fff;">Portrait image</p>
                                        <div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>

                                            <div class="kv-avatar center-block" style="width:100%">
                                            <input id="avatar-2" name="userImage" type="file" class="file-loading">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pass1">Password<span class="text-danger">*</span></label>
                                            <input id="pass1" type="password" placeholder="Password" required
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Password" class="form-control" id="passWord2">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </div> 
                        </div>
                    <div class="col-xl-5">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Manage users</h4>

                            <div class="table-responsive">
                                <table class="table table-borderless table-hover table-centered m-0">

                                    <thead class="thead-light">
                                        <tr>
                                            <th colspan="2">Profile</th>
                                            <th>Date registered</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 36px;">
                                                <img src="assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                            </td>

                                            <td>
                                                <h5 class="m-0 font-weight-normal">Cyrus Mulatya</h5>
                                                <p class="mb-0 text-muted"><small>Member Since 2020</small></p>
                                            </td>

                                            <td>
                                                08-03-2020
                                            </td>
                                            <td>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="width: 36px;">
                                                <img src="assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                            </td>

                                            <td>
                                                <h5 class="m-0 font-weight-normal">Cyrus Mulatya</h5>
                                                <p class="mb-0 text-muted"><small>Member Since 2020</small></p>
                                            </td>

                                            <td>
                                                08-03-2020
                                            </td>

                                            <td>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                            </td>
                                        </tr>
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        
        

                
    
            </div>
        </div>
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
    	    defaultPreviewContent: '<i class="icon-camera" style="font-size:96px;"></i><h6 class="text-muted">Click to select square size</h6>',
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