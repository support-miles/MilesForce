<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>MilesSR | Blank Page Layout</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta content="Shivam Chopra" name="author" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <?php include ('application/views/common/commonplugins.php'); ?>
        <?php include ('application/views/common/commoncss.php'); ?>
         <!-- <link href="../assets/js/address.css" rel="stylesheet"/> -->
        <style> body{ font-family: 'Roboto', sans-serif;} </style>
        <style type="text/css" media="screen">
            .aligncenter{
              text-align: center;
              vertical-align: middle !important;
              padding: 5px 10px !important;
            }
            .ellipsis{
              white-space: nowrap; 
              overflow: hidden;
              width: 15em; 
              text-overflow: ellipsis; 
            }
            .border1px{
              border: 1px #000 solid !important;
            }
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
                           <!-- BEGIN PAGE  -->
                           <div class="row widget-row">
                        <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered"  style="cursor: pointer;" id="dialled_calls">
                                <h4 class="widget-thumb-heading">DIALLED CALLS</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-call-out"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">7,644</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="missed_calls">
                                <h4 class="widget-thumb-heading">MISSED CALLS</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red "><img src="<?=URL?>public/assets/pages/img/missed_call.png" alt="missed_calls" style="height: 26px;width: 29px;"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">1,293</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="untracked_calls">
                                <h4 class="widget-thumb-heading">UNTRACKED CALLS</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-purple icon-call-end"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">815</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="visitor">
                                <h4 class="widget-thumb-heading">VISITOR</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-user-follow"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">5,071</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                            <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="report">
                                <h4 class="widget-thumb-heading">REPORT</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-yellow-gold icon-bar-chart"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">5,071</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>


                            <div class="col-md-2">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="cursor: pointer;" id="other_work">
                                <h4 class="widget-thumb-heading">OTHER WORK</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-layers"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">COUNT</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">5,071</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                    </div>
                           <!-- END PAGE -->
                            <div class="clearfix"></div>
                            <!-- begin the pagelod div -->
                               <div id="milesstone">                         
                            </div>
                            <!-- end the page load div -->
                        </div>
                    </div>
            </div>
              <div id="chatload"></div>  
              <?php include ('application/views/common/footer.php'); ?>
            <div class="scroll-to-top" style="display: none;"><i class="icon-arrow-up"></i>/div>
        </div>

    </body>

<?php include ('application/views/common/commonjs.php'); ?>

<script>
  var baseurl = '<?=URL?>';
// for dialled_calls calls
 $("#dialled_calls").on("click",function() { 
     $.ajax({
       url : baseurl+'milestone/dialledcallslist',
       success : function(data) { 
             $("#milesstone").html(data);
        }
     }); 

 });

 // for missed_calls calls
 $("#missed_calls").on("click",function() { 
    $.ajax({
       url : baseurl+'milestone/missedcallslist',
       success : function(data) { 
             $("#milesstone").html(data);
        }
     }); 

 });

// for untracked_calls calls
$("#untracked_calls").on("click",function() { 
    $.ajax({
      url : baseurl+'milestone/untrackedcallslist',
      success : function(data) { 
             $("#milesstone").html(data);
        }
     }); 
});

// for visitor calls
$("#visitor").on("click",function() { 
    $.ajax({
      url : baseurl+'milestone/visitorslist',
      success : function(data) { 
             $("#milesstone").html(data);
        }
     }); 
});

 // for report calls
$("#report").on("click",function() { 
    $.ajax({
       url : baseurl+'milestone/milestonereport',
       success : function(data) { 
             $("#milesstone").html(data);
        }
     }); 

});

  // for other_work calls
$("#other_work").on("click",function() { 
   $.ajax({
      url : baseurl+'milestone/otherwork',
      success : function(data) { 
             $("#milesstone").html(data);
        }
     }); 

 });

 //toggle `popup` / `inline` mode
 $.fn.editable.defaults.mode = 'popup';     
   
$(document).on('click', '.username', function () {
        var firstnamevar = $(this).attr("firstname");
        var lastnamevar = $(this).attr("lastname");
             //make Candidatename editable
       $('.username').editable({
                send: 'always',
                url: 'MWB/updatestudentname.php',
              success: function (response) {
                    if(response === false) {
                        console.log('remote error from success');
                        return 'remote error';
                    }
                },
                error: function (response) {
                    console.log('remote error from fail');
                    return 'remote error';
                },
                title: 'Enter Name',
                value: {
                    firstname: firstnamevar, 
                    lastname:lastnamevar, 
                }
        });
   });

  $(document).on('click', '.primarymobilenum', function () {
         var primarymobile = $(this).attr("data-mobile");
         var pcountrycodeval = $(this).attr("data-pcountrycode");
         
         //make Mobile num editable  //sourceCountry 
                 $('.primarymobilenum').editable({ 
                            send: 'always',
                            url: 'MWB/ajax.php',
                            title: 'Enter Country code and Mobile',
                            showbuttons: 'bottom',
                            value: {
                                mobilenum: primarymobile,
                                countrycode: pcountrycodeval
                            },
                             Countrycode: [
                                {value: "+91", text: "India"},
                                {value: "+61", text: "Australia"}
                            ]
                  });
     }); 
      //make alt Mobile num editable

   $(document).on('click', '.altmobilenum', function () {
                       var altmobile = $(this).attr("data-altmobile");
                       var countrycodeval = $(this).attr("data-altcountrycode");
             //make Mobile num editable  //sourceCountry 
                     $('.altmobilenum').editable({ 
                                send: 'always',
                                url: 'MWB/ajax.php',
                                title: 'Enter Country code and Mobile',
                                showbuttons: 'bottom',
                                value: {
                                    mobilenum: altmobile,
                                    countrycode: countrycodeval
                                },
                                 Countrycode: [
                                    {value: "+91", text: "India"},
                                    {value: "+61", text: "Australia"}
                                ]
                      });
   });      

$(document).on('click', 'a', function () {

  //make level editable
     $('.level').editable({
            type: 'select',
            title: 'Select Level',
            placement: 'right',
            value: 2,
            source: [
                {value: 1, text: 'M-1'},
                {value: 2, text: 'M-2'},
                {value: 3, text: 'M-2'}
            ]
        });
            
          //make Email num editable
         $('.email').editable({ 

         });

       //make nextfollowupdate editable
         $('.nextfollowupdate').editable({ 

         });
         
       //make gender editable
     $('.gender').editable({
            type: 'select',
            title: 'Select Gender',
            placement: 'right',
            value: 2,
            source: [
                {value: 1, text: 'Male'},
                {value: 2, text: 'Female'},
            ]
        });
         

    //make Course editable
     $('.course').editable({
            type: 'select',
            title: 'Select Course',
            placement: 'right',
            value: 2,
            source: [
                {value: 1, text: 'US CPA'},
                {value: 2, text: 'US CMA'},
                 {value: 2, text: 'CFA'},
            ]
        });
       //make Designtaion editable
         $('.designtaion').editable({ 

         });
        //make Course editable
         $('.experience').editable({
                type: 'select',
                title: 'Select Course',
                placement: 'right',
                value: 2,
                source: [
                    {value: 1, text: '+1'},
                    {value: 2, text: '+2'},
                    {value: 2, text: '+3'},
                    {value: 2, text: '+4'},
                    {value: 2, text: '+5'},
                    {value: 2, text: '+6'},
                    {value: 2, text: '+7'},
                ]
        });

          //make Education editable
         $('.education').editable({ 

         });
         
            //make Candidate info editable
         $('.candidateinfo').editable({ 

         });
           //make Candidate info editable
         $('.Company').editable({ 

         });
 //make Course editable
         $('.DataSource').editable({
                type: 'select',
                title: 'Select DataSource',
                placement: 'right',
                value: 2,
                source: [
                    {value: 1, text: 'CA'},
                    {value: 2, text: 'Net Enquiry'},
                    {value: 3, text: 'Physical Enquiry'}
                ]
        });
});


</script>



</html>
