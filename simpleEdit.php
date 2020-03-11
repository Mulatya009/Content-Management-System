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

    <body class="pt-5">

        <!-- Navigation Bar-->

        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="container "style="box-shadow: -1px 7px 12px 3px rgba(0,0,0,0.25); py-5" >
            <div class=" py-3 pl-5">
                <button type="button" class="btn btn-gradient bg-secondary btn-sm">Back</button><br><br>
                <form class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Title"  style="font-size: 12px; height: 45px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-7">
                            <select name="" id="" class="form-control">
                                <option value="">Local</option> 
                                <option value="">Technology</option>
                                <option value="">International</option>
                                <option value="">External</option>
                                <option value="">Political</option>
                                <option value="">Social</option>
                                <option value="">Education</option>
                                <option value="">Lifestyle</option>
                                <option value="">Gossips</option>
                                <option value="">Innovations</option>
                                <option value="">Discussions</option>
                                <option value="">Debates</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="4" id="exampleInputMobile" placeholder="Description"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-2 col-form-label">Upload video</label>
                        <div class="col-sm-7">
                           
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" placeholder="Upload video"  style="font-size: 12px; height: 45px;">
                                <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-info" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-2 col-form-label">Thumbnails</label>
                        <div class="col-sm-7">
                            <div class="row">
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
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-7">
                        <button type="submit" class="btn btn-info mr-2">Update</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <br><br>
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