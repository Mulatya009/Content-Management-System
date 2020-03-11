<?php
    $id = $_GET['id'];

    require 'connection.php';
    
    // fetch
    $sql= mysqli_query($conn, "SELECT * FROM breaking_news WHERE id = '$id'");  
    
    $row = mysqli_fetch_assoc($sql);
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

    <body class="pt-5">

        <!-- Navigation Bar-->

        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="container "style="box-shadow: -1px 7px 12px 3px rgba(0,0,0,0.25); py-5" >
        <br>
            
            <div class=" py-3 pl-5">

                <div class="row mb-4">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-gradient bg-secondary btn-sm">Back</button>
                    </div>
                    <div class="col-md-4">
                        <h4 style="float: left;">Edit "<?php echo $row['title']; ?>"</h4>
                    </div>
                    
                </div>
                
                <div class="form-group row">
                    <div class="col-md-2"></div>
                      <div class="col-md-7">
                          <div id="messages"></div>
                      </div>
                    </div>
                  <div>

                <form class="forms-sample" action="edit_breakingNews_ajax.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" id="uploadImageForm">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Reporter</label>
                        <div class="col-sm-7">
                            <input type="text" name="reporter" class="form-control" value="<?php echo $row['reporter']; ?>" id="exampleInputUsername2" placeholder="Reporter" required style="font-size: 12px; height: 45px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-7">
                            <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" id="exampleInputEmail2" placeholder="Title" required  style="font-size: 12px; height: 45px;">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="description" rows="4" id="exampleInputMobile" placeholder="Description" required><?php echo $row['description']; ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-7">
                            <select name="category" id="" class="form-control" required>
                                <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                <option value="Local">Local</option> 
                                <option value="Technology">Technology</option>
                                <option value="International">International</option>
                                <option value="External">External</option>
                                <option value="Political">Political</option>
                                <option value="Social">Social</option>
                                <option value="Education">Education</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Gossips">Gossips</option>
                                <option value="Innovations">Innovations</option>
                                <option value="Discussions">Discussions</option>
                                <option value="Debates">Debates</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-2 col-form-label">Upload video</label>
                        <div class="col-sm-7">
                           
                            <div class="input-group col-xs-12">
                                <input type="text" name="video_url" class="form-control file-upload-info" value="<?php echo $row['video_url']; ?>" placeholder="Upload video" required  style="font-size: 12px; height: 45px;">
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
                            <button type="submit" name="submit" class="btn btn-info mr-2" style="float: right;">Update</button>
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
        <script src="assets/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>	
        <script src="assets/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>	
        <script src="assets/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
        <script src="assets/fileinput/js/fileinput.min.js"></script>

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
    	    defaultPreviewContent: '<img src="<?php echo $row['image_square']; ?>" alt="Your Avatar" style="width:165px; border-radius: 5px;"><h6 class="text-muted">Click to select square size</h6>',
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
    	    defaultPreviewContent: '<img src="<?php echo $row['image_banner']; ?>" alt="Your Avatar" style="width:391px; height: 165px; border-radius: 5px;"><h6 class="text-muted">Click to select banner size</h6>',
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
              

            $("#messages").html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
              '<span class="alert-icon"><i class="ni ni-check-bold"></i></span>'+
              '<span class="alert-text"><strong>Thank you!,</strong> '+
              responses.message + '</span>'+

						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
						  '</div>');

							$('input[type="text"]').val('');
							$(".fileinput-remove-button").click();
						}
						else {

            $("#messages").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
              '<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>'+
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
</html>