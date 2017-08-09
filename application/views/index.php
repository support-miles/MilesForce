<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | Miles Online Videos</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="<?=URL?>public/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=URL?>public/assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?=URL?>public/assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?=URL?>public/assets/css/style.css" rel="stylesheet">
    
  </head>
  <body>
    <div class="about-top">
       <div class="login-page"> <!-- Main Particles Class -->
          <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; " width="677" height="100"></canvas></div>
          <div class="login-box">
              <div class="logo">
                <center>
                  <img src="<?=URL?>public/assets/images/Miles-CPA-Review-Logo-Course-Training-Institute-india.png" alt="" style="width: 245px;">
                </center>
              </div>
              <div class="card">
                <div class="body">
                  <form id="signin" action="<?=URL?>index/logincheck" method="POST">
                    <div class="msg">Sign in</div>
                  <span style="color:red;"><?=(isset($this->msg) && $this->msg !='')?$this->msg:''?> </span>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control"  name="password" id="password" placeholder="Password" required>
                        </div>
                   </div>
                   <br/>
                    <div class="row" align="center">
                        <div class="col-xs-4">
                          <input type="submit" class="btn btn-block bg-pink waves-effect" name="login" value="SIGN IN" />
                         </div>
                    </div>
                   <input class="form-control placeholder-no-fix" type="hidden" autocomplete="off" placeholder="Username" name="loginenter" value="1"/>
                  </form>
                </div>
              </div>


          </div>
       </div>
    </div>
  </body>
</html>
<!-- Jquery Core Js -->
<script src="<?=URL?>public/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=URL?>public/assets/plugins/bootstrap/js/bootstrap.js"></script>
<script src="<?=URL?>public/assets/plugins/node-waves/waves.js"></script>
<script src="<?=URL?>public/assets/plugins/jquery-validation/jquery.validate.js"></script>

<!-- <script src="../assets/js/jquery.countdownTimer.js"></script> -->
<!-- <Custom Js> -->
<script type="text/javascript">
// function sesslogout()
// {
//   window.location.href='application/common/logout.php';
// }

//     function check_loginuser(){
//     var username = $('#username').val();
//     var password = $('#password').val();
//    // alert(username);
//     var error_count = 0;
//     $.ajax({
//     url : 'application/controller/ValidateLogin.php',
//     type : 'post',
//     data : {
//     "username" : username,
//     "password":password,
//     "case" : 'verifylogin'
//     },
//     success : function(data) {
      
//     var data = data.trim();
  
//          var data = data.split("~"); 
//     if(data[1]==0)
//     {
//         if (data[0]==1) {
//         window.location.href = "application/choose.php?vmode=app&ymode=2016";
//         }
//         else if (data[0]==2){
//         window.location.href = "application/choose.php?vmode=app&ymode=2017";        
//         }
//         else if (data[0]==3){
//         window.location.href = "application/version.php";      
//         }
//         else{
//           alert('Access Error!!! Please Check With Support Team')
//         }
//          }
//       else if(data[1]==1)
//       {
        
//           $('#myModalblablaBreakdownConnect').modal({backdrop: "static"});
      
//        $("#breakdownclock").countdowntimer({
//               hours: 00,
//               minutes: 05,
//               seconds: 00,
//               size: "1g",
        
//           });
//           setInterval(function () {
//             if($("#pauseBtnhms").val() == 'resume'){
//               $("#pauseBtnhms").click();
//               $('#myModalblablaBreakdownConnect').modal('hide');
//             }
//            }, 900000);
//       }
//        else if(data[1]==2)
//      {
//       $('#myModalblocked').modal({backdrop: "static"});
//      }else if(data == 0){
//       $('#loginerror').html("There was an error with your Username/Password combination. Please try again.");
//      }
//     }
//     });
//     return false;
//     }
</script>