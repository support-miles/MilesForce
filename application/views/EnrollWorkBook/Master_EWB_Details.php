<?php
$selectedcandidateid = $_POST["canid"];
?>

<div class="col-md-4">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th style="display: none;"></th>
        <th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Secondary Information&nbsp;<?=$selectedcandidateid?></center></th></tr>
      </thead>
      <tbody>
        <tr>
          <td style="display: none;"></td>
          <td>Designation</td>
          <td><p class="ellipsis btn font-blue-steel"  data-canid="<?=$selectedcandidateid?>" onclick="updatedesignation(<?=$selectedcandidateid?>,'designatindb')" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">Chief Operating Officer</p></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Years of Exp</td>
          <td><a href="javascript:void(0)" class="experience<?=$selectedcandidateid?>" onclick="updateexperience(<?=$selectedcandidateid?>,6);" data-canid="<?=$selectedcandidateid?>"  data-placement="right" data-title="Select Years of Exp">DropDown</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Education</td>
          <td><p class="ellipsis btn font-blue-steel" data-canid="<?=$selectedcandidateid?>" onclick="updateeducation(<?=$selectedcandidateid?>,'educationdb')" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">Click Me</p></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Student/Professional</td>
          <td><a href="javascript:void(0)" class="studentprof<?=$selectedcandidateid?>" onclick="updatestudentprof(<?=$selectedcandidateid?>,'selecdb')" data-placement="right" data-title="Select Student/Professional">DropDown</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td rowspan="2" style="vertical-align: middle;">Email</td>
          <td><p class="ellipsis btn font-blue-steel" onclick="updateemail(<?=$selectedcandidateid?>,'pemail','semai')" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">primary@email.com</p></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td><p class="ellipsis btn font-blue-steel" onclick="updateemail(<?=$selectedcandidateid?>,'pemail','semai')" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">secondary@email.com</p></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td rowspan="3" style="vertical-align: middle;">Alternate Contact</td>
          <td><p class="ellipsis btn font-blue-steel" onclick="updatecontact(<?=$selectedcandidateid?>)" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">542343242342</p>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;" callcanid="1" mobile="8888888888"></i></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td><p class="ellipsis btn font-blue-steel" onclick="updatecontact(<?=$selectedcandidateid?>)" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">542343242342</p>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;" callcanid="1" mobile="8888888888"></i></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td><p class="ellipsis btn font-blue-steel" onclick="updatecontact(<?=$selectedcandidateid?>,'pemail','semai')" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">542343242342</p>&nbsp;<i class="fa fa-phone-square font-green-jungle oncall" style="font-size:20px;" callcanid="1" mobile="8888888888"></i></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Gender</td>
          <td><a href="javascript:void(0)" class="gender<?=$selectedcandidateid?>" onclick="updategender(<?=$selectedcandidateid?>,'genderval')"  data-placement="right" data-title="Select Gender">Male</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Enrollment Date</td>
          <td><a href="javascript:void(0)" class="enrollmentdate<?=$selectedcandidateid?>" onclick="updateenrollmentdate(<?=$selectedcandidateid?>)"  data-type="date" data-placement="right" data-title="Select Enrollment Date">2017-04-02</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Agreement Status</td>
          <td>Accepted</td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Source</td>
          <td><a href="javascript:void(0)" class="source<?=$selectedcandidateid?>"  onclick="updatesource(<?=$selectedcandidateid?>,'sourceval')"  data-placement="right" data-title="Select Source">DropDown</a></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td rowspan="4" style="vertical-align: middle;">Address</td>
          <td><p class="ellipsis btn font-blue-steel addressclick" data-target="#address" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">India</p></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td><p class="ellipsis btn font-blue-steel addressclick" data-target="#address" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">Maharashtra</p></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td><p class="ellipsis btn font-blue-steel addressclick" data-target="#address" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">Mumbai</p></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td><p class="ellipsis btn font-blue-steel addressclick" data-target="#address" data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">Complate Address</p></td>
        </tr>

        <tr>
          <td style="display: none;"></td>
        </tr>
        <tr>
          <td style="display: none;"></td>
          <td>Additional Info</td>
          <td><p class="ellipsis btn green-jungle" data-target="#addinfocommentBox" data-toggle="modal" style="margin-bottom: 0px;text-align: left;">&nbsp;&nbsp;Last Comment Updates here</p></td>
        </tr>
      </tbody>
  </table>
</div>

<div class="col-md-4">
  <table class="table table-striped table-bordered">
    <thead>
      <tr><th style="display: none;"></th><th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Fee &amp; Access Details</center></th></tr>
    </thead>
    <tbody>
      <tr>
        <td style="display: none;"></td>
        <td>Fees paid | agreed</td>
        <td>
          5900&nbsp;|&nbsp;108,000
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Fee Status</td>
        <td>Overdue 2017</td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Last Connect</td>
        <td>
          12-Jul-2017&nbsp;|&nbsp;Sandra
        </td>
      </tr>
       <tr>
        <td style="display: none;"></td>
        <td>Classroom</td>
        <td>
          C4 | ABFR
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>OTB Access</td>
        <td>
           &nbsp;&nbsp;<span class="btn btn-danger btn-xs">Bec</span>
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>MOV Access</td>
        <td>
          &nbsp;&nbsp;<span class="btn btn-info btn-xs">Aud</span>
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Books</td>
        <td>
          &nbsp;&nbsp;<span class="btn btn-warning btn-xs">Far</span>
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Fee due comments</td>
        <td><p class="ellipsis btn green-jungle" data-target="#feeduecommentBox" data-toggle="modal" style="margin-bottom: 0px;text-align: left;">&nbsp;&nbsp;Last Comment Updates here</p></td>
      </tr>
      <!-- Heading - 2 -->
      <tr>
        <td style="display: none;"></td>
        <th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Corporate Details</center></th>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Corporate Referral</td>
        <td>
          <a href="javascript:void(0)" class="corporatereferral<?=$selectedcandidateid?>" onclick="updatecorporatereferral(<?=$selectedcandidateid?>,'fdsfds')"  data-placement="right" data-title="Select Corporate Referral">DropDown</a>
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td rowspan="4" style="vertical-align: middle;">Lead Details</td>
        <td><p class="ellipsis btn font-blue-steel leaddetails<?=$selectedcandidateid?>"  data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">SomeName</p></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td><p class="ellipsis btn font-blue-steel leaddetails<?=$selectedcandidateid?>"  data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">99663324456</p></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td><p class="ellipsis btn font-blue-steel leaddetails<?=$selectedcandidateid?>"  data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">some1@mail.com</p></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td><p class="ellipsis btn font-blue-steel leaddetails<?=$selectedcandidateid?>"  data-toggle="modal" style="text-decoration: dashed;border-bottom: dashed 1px #0088cc;margin-bottom: 0px;text-align: left;">Lead Comments</p></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Placement</td>
        <td>
          <a href="javascript:void(0)" class="placement" data-placement="right" data-title="Select Placement">DropDown</a>
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Last Connect</td>
        <td>
          27-Jun-2016&nbsp;|&nbsp;Sandra
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Comments</td>
        <td><p class="ellipsis btn green-jungle" data-target="#corporatecommentBox" data-toggle="modal" style="margin-bottom: 0px;text-align: left;">&nbsp;&nbsp;Last Comment Updates here</p></td>
      </tr>
      <!-- Heading - 3 -->
      <tr>
        <td style="display: none;"></td>
        <th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Student Reference</center></th>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>SR Status</td>
        <td>
          <a href="javascript:void(0)" class="srstatus" data-placement="right" data-title="Select SR Status">DropDown</a>
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Students Referred</td>
        <td>Fetch Can. No.</td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Last Connect</td>
        <td>
          27-Jun-2016&nbsp;|&nbsp;Sandra
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>SR Comment</td>
        <td><p class="ellipsis btn green-jungle" data-target="#commentBox" data-toggle="modal" style="margin-bottom: 0px;text-align: left;">&nbsp;&nbsp;Last Comment Updates here</p></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="col-md-4">
  <table class="table table-striped table-bordered">
    <thead>
      <tr><th style="display: none;"></th><th colspan="2" style="background-color: #578ebe;color: #fff;"><center>CPA Exam Gameplan</center></th></tr>
    </thead>
    <tbody>
      <tr>
        <td style="display: none;"></td>
        <td>Batch SR Lead</td>
        <td>Sandra</td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Batch Start Date</td>
        <td>May 2016</td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>PGDA</td>
        <td>PGDA</td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Evaluation</td>
        <td><a href="javascript:void(0)" class="evaluation<?=$selectedcandidateid?>"  onclick="updateevolution(<?=$selectedcandidateid?>,'sourceval')"  data-placement="right" data-title="Select Evaluation">Evaluation Dropdown</a></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>NTS (initial)</td>
        <td><a href="javascript:void(0)" class="NTS<?=$selectedcandidateid?>" onclick="updatents(<?=$selectedcandidateid?>,'sourceval')" data-placement="right" data-title="Select Evaluation">NTS (initial)</a></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>AUD Target Exam</td>
        <td><a href="javascript:void(0)" class="audnext<?=$selectedcandidateid?>" onclick="updateaudtarget(<?=$selectedcandidateid?>,'sourceval')" data-placement="right" data-title="Select AUD Next Exam">Cleared Dropdown</a></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>BEC Target Exam</td>
        <td><a href="javascript:void(0)" class="becnext<?=$selectedcandidateid?>" onclick="updatebectarget(<?=$selectedcandidateid?>,'sourceval')" data-placement="right" data-title="Select BEC Next Exam">Undecided Dropdown</a></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>FAR Target Exam</td>
        <td><a href="javascript:void(0)" class="farnext<?=$selectedcandidateid?>" onclick="updatefartarget(<?=$selectedcandidateid?>,'sourceval')" data-placement="right" data-title="Select FAR Next Exam">Q2 2017 Dropdown</a></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>REG Target Exam</td>
        <td><a href="javascript:void(0)" class="regnext<?=$selectedcandidateid?>"  onclick="updateregtarget(<?=$selectedcandidateid?>,'sourceval')" data-placement="right" data-title="Select REG Next Exam">Q2 2017 Dropdown</a></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Overall Status</td>
        <td>Cleared some - WIP</td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Next Exams</td>
        <td>Fetch</td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Miles Feedback</td>
        <td><a href="javascript:void(0)"  class="milesfeedback<?=$selectedcandidateid?>"  onclick="updatemilesfeedback(<?=$selectedcandidateid?>,'sourceval')" data-placement="right" data-title="Select Miles Feedback">Good</a></td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Last Connect</td>
        <td>
          27-Jun-2016&nbsp;|&nbsp;Sandra
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Comments</td>
        <td><p class="ellipsis btn green-jungle" data-target="#commentBox" data-toggle="modal" style="margin-bottom: 0px;text-align: left;">&nbsp;&nbsp;Last Comment Updates here</p></td>
      </tr>
      <tr><th style="display: none;"></th><th colspan="2" style="background-color: #578ebe;color: #fff;"><center>Academics Data</center></th></tr>
      <tr>
        <td style="display: none;"></td>
        <td>Last Connect</td>
        <td>
          27-Jun-2016&nbsp;|&nbsp;Sandra
        </td>
      </tr>
      <tr>
        <td style="display: none;"></td>
        <td>Comments</td>
        <td><p class="ellipsis btn green-jungle" data-target="#commentBox" data-toggle="modal" style="margin-bottom: 0px;text-align: left;">&nbsp;&nbsp;Last Comment Updates here</p></td>
      </tr>


    </tbody>
  </table>
</div>
