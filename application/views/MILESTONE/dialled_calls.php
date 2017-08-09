 <div class="row">
  <div class="col-md-12" id="cpa_can_pro">
     

    <div class="portlet box blue-madison">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-globe"></i>
          DIALLED CALLS
        </div>
      </div>
          <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                <thead>
                    <tr>
                          <th class="all aligncenter">Can No.</th>
                          <th class="all aligncenter">Full Name</th>
                          <th class="all aligncenter">Course</th>
                          <th class="all aligncenter">Level/Batch</th>
                          <th class="all aligncenter">Contact</th>
                          <th class="all aligncenter">Company</th>
                          <th class="all aligncenter">Prof Qual</th>
                          <th class="all aligncenter">Last Called By</th>
                          <th class="all aligncenter">LFD</th>
                          <th class="all aligncenter">NFD</th>
                          <th class="all aligncenter">Eligibility</th>
                          <th class="all">Action</th> 
                          <th class="none showtd"></th>
                    </tr>
                </thead>
                <tbody>                                             
                    <!-- BEGIN -->
                    <tr class="text-center">
                        <td style="vertical-align: middle;" class="get_mwb_details" canid="1">MWB_1</td>
                        <td style="vertical-align: middle;"><a href="#" class="username" data-name="txt_name" data-type="username" firstname="shivam" lastname="Chopra" data-placement="right" data-title="Enter username" data-pk="1" >Shivam Chopra</a></td>
                        <td style="vertical-align: middle;"><a href="#" class="level" data-pk="1">CPA</a></td>
                         <td style="vertical-align: middle;"><a href="#" class="level" data-pk="1">CPA-M7-01</a></td>
                        <td style="vertical-align: middle;"><a href="#" class="primarymobilenum" data-type="primarymobilenum" data-placement="right" data-mobile="987654321" data-pcountrycode="+91" data-title="Enter Mobile">987654321</a>&nbsp;<i class="fa fa-phone-square font-green-jungle milestone_dialled_calls" style="font-size:20px;" callcanid="1" mobile="987654321"></i></td>
                        <td style="vertical-align: middle;"><a href="#" class="company" data-type="text" data-placement="right" data-title="Select Company">Deloitte</a></td>
                        <td style="vertical-align: middle;">CA Inter</td>
                        <td style="vertical-align: middle;">12-Jul-2017<p class="btn-info">Hasham</p></td>
                        <td style="vertical-align: middle;"></td>
                        <td></td>
                        <td></td>
                        <td>
                        <div class="row">
                              <!-- button  class="btn btn-sm btn-info mt-sweetalert" data-title="Are you Sure To Delete {CanID}" data-message="Are you sure you want to delete the candidate"
                                data-type="warning" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-canid="1" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false" data-close-on-cancel="false" data-confirm-button-text='Yes, I agree'
                                data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you" data-popup-message-success="Candidate Deleted Succesfully" data-popup-title-cancel="Cancelled" data-popup-message-cancel="Candidate is not Deleted">Delete 
                              </button> -->
                              <button href="javascript:;" class="btn btn-xs blue">Delete</i></button>
                          </div>
                          <div class="row">
                             <!--  <button style="margin-top: 4px;" class="btn btn-sm btn-danger mt-sweetalert" data-title="Are you Sure To Delete {CanID}" data-message="Are you sure you want to delete the candidate"
                                data-type="warning" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-canid="1" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false" data-close-on-cancel="false" data-confirm-button-text='Yes, I agree'
                                data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you" data-popup-message-success="Candidate Deleted Succesfully" data-popup-title-cancel="Cancelled" data-popup-message-cancel="Candidate is not Deleted">Enrolled
                              </button> -->
                              <button style="margin-top: 4px;" href="javascript:;" class="btn btn-xs red">Enrolled</i></button>
                          </div>
                        </td>
                        <td>
                          <div class="row otherMWBdetails1"></div> 
                        </td> 
                      </tr>
                      <!-- END -->
                </tbody>
            </table>
        </div>
     
    </div>
  </div>
</div>

<script src="<?=URL?>public/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
 

<script>
$(".get_mwb_details").click(function(){
       var expandcan = $(this).attr("canid");
       loadotherdetails(expandcan);
});

function loadotherdetails(expandcan){ 
       var baseurl = '<?=URL?>';
       $.ajax({
          url : baseurl+'milestone/candidateotherdetails',
          type : 'post',
          data : {
              "canid" : expandcan
          },
         success : function(data) { 
             $(".otherMWBdetails"+expandcan).html(data);
          }
       }); 
 }

$(".milestone_dialled_calls").click(function(){
     var expandcan = $(this).attr("callcanid");
     var mobile = $(this).attr("mobile");
          $.ajax({
             url : 'MILESTONE/milestonechatbox.php',
              type : 'post',
             data : {
                  "canid" : expandcan,
                   "mobile" :mobile
              },
             success : function(data) { 
                   $("#chatload").html(data);
                   //alert("loadotherdetails");
              }
           }); 
});


//toggle `popup` / `inline` mode
$.fn.editable.defaults.mode = 'popup';     
$(document).on('click', '.username', function () {
        var firstnamevar = $(this).attr("firstname1");
        var lastnamevar = $(this).attr("lastname1");
             //make Candidatename editable
       $('.username').editable({
                type: 'POST',
               send: 'always',
                url: 'MilesWorkBook/ajax.php',  
                ajaxOptions: {
                    dataType: 'post'
                },
                 params: {
                   action: 'updatename',//to find the code search with action in ajax.php file 
                   column1:'first_name',
                   column2:'last_name'
                },
                 value: {
                    firstname: firstnamevar, 
                    lastname:lastnamevar, 
                },
                success: function(response, newValue) {
                   // $( "#Response" ).load( "../ajax/get/{{issue_obj.id}}/response/" );
                }
        });
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

//primary contact editable
$(document).on('click', '.primarymobilenum', function () {
     var primarymobile = $(this).attr("data-mobile"); 
     var pcountrycodeval = $(this).attr("data-pcountrycode");
         
      //make Mobile num editable  //sourceCountry 
        $('.primarymobilenum').editable({ 
                  send: 'always',
                  url: 'MilesWorkBook/ajax.php',  
                  title: 'Enter Country code and Mobile',
                  ajaxOptions: {
                      dataType: 'post'
                  },
                params: {
                     action: 'updateprimarycontact', //to find the code search with action in ajax.php file 
                     column1:'countrycode',
                     column2:'primarymobile'
                  },
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

//make company editable
  $('.company').editable({ 
  });

$(document).on('click', 'a', function () {

       //make gender editable
     $('.mwb_gender').editable({
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
       $('.mwb_experience').editable({
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

     //make the student /professional
     $('.mwb_studentprof').editable({
              type: 'select',
              title: 'Select Course',
              placement: 'right',
              value: 2,
              source: [
                   {value: 1, text: 'Student'},
                   {value: 2, text: 'Professional'}
              ]
      });

   //make Course editable
      $('.mwb_source').editable({
                type: 'select',
                title: 'Select Source',
                placement: 'right',
                value: 2,
                source: [
                   {value: 1, text: 'Referred by B-CMA-123456'},
                   {value: 2, text: 'Referred by B-CMA-1234567'}
                ]
      });
//For mwb_corporatereferral 


  $('.mwb_corporatereferral').editable({
              type: 'select',
              title: 'Select Corporate Referral',
              placement: 'left',
              value: 2,
              source: [
                   {value: 1, text: 'Successful'},
              {value: 2, text: 'Hot Leads'},
              {value: 3, text: 'To be Tapped'},
               {value: 4, text: 'Not Interested'},
                {value: 5, text: 'Not Applicable'}
              ]
      });

   //make mwb_placement editable

     $('.mwb_placement').editable({ 
            type: 'select',
            title: 'Select Placement',
            placement: 'right',
            value: 1,
            source: [
                {value: 1,text: 'Recruiter'},
                {value: 2,text: 'Recruiter'}
            ]
     });

     //make sr status editable
     $('.mwb_srstatus').editable({ 
            type: 'select',
            title: 'Select SR Status',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Referred & Future potential'},
                {value: 2,text: 'Future potential'},
                {value: 3,text: 'Not interested'}
            ]
     });


 //make sr status editable
     $('.mwb_eligibility_srstatus').editable({ 
            type: 'select',
            title: 'Select eligibility Status',
            placement: 'right',
            value: 1,
            source: [
                {value: 1, text: 'Eligible'},
                {value: 2,text: 'Not eligible - pursuing PGDPA'},
                {value: 3,text: 'Not eligible - pursuing other course'},
                {value: 4,text: 'Awaiting revert from Acads'},
                {value: 5,text: 'Status Unknown'}
            ]
     });

     


});
</script>

