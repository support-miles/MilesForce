<?php
 $candidateid = $_POST["canid"];
 $mobilenum = $_POST["mobile"];
?>
<head>
<style>
 .chatbox{
    height:auto;
    width:auto;
    position: fixed;
    z-index: 100000;
}

.chat-window{
    bottom:13px;
    position:fixed;
    float:left;
    margin-left:75.5% !important;
}
.chat-window > div > .panel{
    border-radius: 5px 5px 0 0;
}
.icon_minim{
    padding:2px 10px;
}
.msg_container_base{
  background: #e5e5e5;
  margin: 0;
  padding: 0 10px 10px;
  overflow-x:hidden;
}
.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_container {
    padding: 10px;
    overflow: hidden;
    display: flex;
}

.tborder{
     border: 1px solid #000000 !important;
   
}
</style>
<script type="text/javascript">
$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
</script>
</head>
<div class="chatbox">
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
        <div class="col-xs-12 col-md-12">
          <div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="fa fa-phone-square"></span>&nbsp;MILESTONE Connect Box</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <div class="row msg_container base_sent">
                    </div>
                    <div class="row msg_container base_receive">
                            <table class="tborder table table-responsive table-hover table-striped">
                                <thead class="tborder">
                                    <tr>
                                        <th class="tborder">Cand ID</th>
                                        <th class="tborder"><?=$candidateid?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                        <td class="tborder">Lifted</td>
                                        <td class="tborder" colspan="2">
                                            <div class="form-group">
                                               <select name="calllifted" class="form-control">
                                                   <option>Option 1</option>
                                                   <option>Option 2</option>
                                                   <option>Option 3</option>
                                                   <option>Option 4</option>
                                                   <option>Option 5</option>
                                               </select>
                                            </div>                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tborder">NL / NR / SO</td>
                                        <td class="tborder" colspan="2">
                                            <div class="form-group">
                                               <select name="badcall" class="form-control">
                                                   <option>Select</option>
                                                   <option>Not Lifted</option>
                                                   <option>No response</option>
                                                   <option>Switched Off</option>
                                               </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr> <td colspan="3">What were you able to discuss?</td>
                                    </tr>
                                           <tr>
                                              <td class="tborder">Exam Gameplan</td>
                                              <td class="tborder"><input type="checkbox" name="examgameplancheck" id="examgameplancheck" value=""/></td>
                                              <td class="tborder" style="display: none;" id="examgameplancomment"> 
                                                 <textarea name="examgameplancomment"></textarea>
                                              </td>
                                           </tr> 
                                           <tr>  
                                              <td class="tborder">CR Connect</td>
                                               <td class="tborder"><input type="checkbox" name="crconnectcheck" id="crconnectcheck"  value=""/></td>
                                              <td class="tborder" style="display: none;" id="crconnectcomment"> 
                                                 <textarea name="crconnectcomment"></textarea>
                                              </td>
                                          </tr>
                                          <tr>  
                                            <td class="tborder">Student Reference</td>
                                            <td class="tborder"><input type="checkbox" name="studentreferencecheck" id="studentreferencecheck" value=""/></td>
                                              <td class="tborder" style="display: none;" id="studentreferencecomment"> 
                                                 <textarea name="studentreferencecomment"></textarea>
                                              </td>
                                          </tr>
                                          <tr>  
                                            <td class="tborder">Miles Feedback</td>
                                             <td class="tborder"><input type="checkbox" name="milesfeedbackcheck" id="milesfeedbackcheck" value=""/></td>
                                              <td class="tborder" style="display: none;" id="milesfeedbackcomment"> 
                                                 <textarea name="milesfeedbackcomment"></textarea>
                                              </td>
                                          </tr>
                                          <tr>  
                                            <td class="tborder">Fee due</td>
                                             <td class="tborder"><input type="checkbox" name="feeduecheck" id="feeduecheck" value=""/></td>
                                              <td class="tborder" style="display: none;" id="feeduecomment"> 
                                                 <textarea name="feeduecomment"></textarea>
                                              </td>
                                          </tr>
                                         <tr>  
                                            <td class="tborder">Something else</td>
                                              <td class="tborder"><input type="checkbox" name="somethingelsecheck" id="somethingelsecheck" value=""/></td>
                                              <td class="tborder" style="display: none;" id="somethingelsecomment"> 
                                                 <textarea name="somethingelsecomment"></textarea>
                                              </td>
                                          </tr>
                                       <tr>  
                                            <td class="tborder">Next Follow Up</td>
                                            <td class="tborder" colspan="2" >
                                               <input type="date" name="nextfollowupdate">
                                            </td>
                                       </tr>
                                           <tr>  
                                            <td class="tborder">Escalate - Acads/RM</td>
                                            <td class="tborder" colspan="2" >
                                                 <select name="escalate" class="form-control">
                                                      <option value="1">CPA</option>
                                                      <option value="2">CMA</option>
                                                      <option value="3">CFA</option>
                                                 </select>
                                            </td>
                                       </tr>
                                </tbody>
                            </table>
                    </div>
                 </div>
                <div class="panel-footer">
                    <div class="input-group">
                        
                        <span class="input-group-btn">
                        <button class="btn btn-danger btn-sm" id="btn-chat">Disconnect</button>
                        </span>&nbsp;&nbsp;&nbsp;<label> Calling <?=$mobilenum?></label>
                        <span class="input-group-btn">
                        <button class="btn btn-danger btn-sm" id="btn-chat">Update</button>
                        </span>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery-2.0.3.min.js"></script>
<script>
  $("#examgameplancheck").click(function(){ 
         var ischecked= $(this).is(':checked');
          if(!ischecked){
            $("#examgameplancomment").css("display","none");
          }
         else {
            $("#examgameplancomment").css("display","");
          } 
  });
  $("#crconnectcheck").click(function(){ 
          var ischecked= $(this).is(':checked');
          if(!ischecked){
            $("#crconnectcomment").css("display","none");
          }
         else {
            $("#crconnectcomment").css("display","");
          } 
  });
  $("#studentreferencecheck").click(function(){ 
     var ischecked= $(this).is(':checked');
          if(!ischecked){
            $("#studentreferencecomment").css("display","none");
          }
         else {
            $("#studentreferencecomment").css("display","");
          } 
  });
  $("#milesfeedbackcheck").click(function(){ 
     var ischecked= $(this).is(':checked');
          if(!ischecked){
            $("#milesfeedbackcomment").css("display","none");
          }
         else {
            $("#milesfeedbackcomment").css("display","");
          } 
  });
  $("#feeduecheck").click(function(){ 
     var ischecked= $(this).is(':checked');
          if(!ischecked){
            $("#feeduecomment").css("display","none");
          }
         else {
            $("#feeduecomment").css("display","");
          } 
  });
    $("#somethingelsecheck").click(function(){ 
          var ischecked= $(this).is(':checked');
          if(!ischecked){
            $("#somethingelsecomment").css("display","none");
          }
         else {
            $("#somethingelsecomment").css("display","");
          } 
  });
</script>