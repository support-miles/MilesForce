<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>MilesSR | EWB</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta content="Shivam Chopra" name="author" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
         <?php include ('application/views/common/commonplugins.php'); ?>
         <?php include ('application/views/common/commoncss.php'); ?>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script> -->
        <!-- x-editable (bootstrap version) -->
        <style> body{ font-family: 'Roboto', sans-serif;} 

        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-content-white page-sidebar-closed page-header-fixed page-sidebar-fixed page-footer-fixed">

        <div class="page-wrapper">
            <?php include ('application/views/common/topheader.php'); ?>
            <div class="clearfix"> </div>
	            <div class="page-container">
	          <?php include ('application/views/common/sidebar.php'); ?>
	                    <div class="page-content-wrapper">
	                        <div class="page-content">
	                            <h1>Dashboard</h1>
	                            <div class="clearfix"></div>
	                        </div>
	                    </div>
	            </div>
            <?php include ('application/views/common/footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i></div>
        </div>
<?php include ('application/views/common/commonjs.php'); ?>
    </body>

</html>