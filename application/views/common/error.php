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
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="public/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="public/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="public/assets/layouts/layout/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="public/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="public/assets/apps/img/favicon.ico" />
        <!-- x-editable (bootstrap version) -->
        <link href="public/assets/global/css/bootstrap-editable.css" rel="stylesheet"/>
          <!-- include summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script> -->
        <!-- x-editable (bootstrap version) -->
        <style> body{ font-family: 'Roboto', sans-serif;} 

        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-content-white page-sidebar-closed page-header-fixed page-sidebar-fixed page-footer-fixed">

        <div class="page-wrapper">
            <?php include ('topheader.php'); ?>
            <div class="clearfix"> </div>
	            <div class="page-container">
	                <?php include ('sidebar.php'); ?>
	                    <div class="page-content-wrapper">
	                        <div class="page-content">
	                            <h1><?=$this->msg?></h1>
	                            <div class="clearfix"></div>
	                        </div>
	                    </div>
	            </div>
            <?php include ('footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i></div>
        </div>


        <script src="public/assets/js/jquery-2.0.3.min.js"></script> <!-- <Added By Chakradhar> -->
        <script src="public/assets/js/bootstrap.min.js"></script> <!-- <Added By Chakradhar> -->
        <script src="public/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- DataTable -->
        <script src="public/assets/js/bootstrap-editable.min.js"></script><!-- <Added By Chakradhar> -->
        <script src="public/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <!-- <script src="public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script> -->
        <!-- DataTable /-->
        <!-- Multiselect -->
        <script src="public/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

        <script src="public/assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
        <script src="public/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- Multiselect /-->
        <script src="public/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- Multiselect -->

        <!-- <script src="public/assets/pages/scripts/components-select2.js" type="text/javascript"></script> -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

        <script src="public/assets/pages/scripts/ui-sweetalert.js" type="text/javascript"></script>
        <script src="public/assets/pages/scripts/components-bootstrap-multiselect.min.js" type="text/javascript"></script>
        <!-- Multiselect /-->
        <!-- DataTable -->
        <script src="public/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <!-- DataTable -->
        <script src="public/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    </body>

</html>