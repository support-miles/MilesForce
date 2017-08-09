<?php
include("../../Include/controller/dbconnect_mysql.php");
//start of  student name update
if(isset($_POST['action']) && $_POST['action'] == "updatename"){

	  $column=$_POST['name'];
	  $new_value=$_POST['value'];
	  if(is_array($new_value)){
	     $firstname = $new_value["firstname"];
	     $lastname = $new_value["lastname"];
	  }
	   $err_string = "";
	  if(trim($firstname) == ""){
                  $err_string .= "Please Enter First Name.\n";
               }
	   if(trim($lastname) == ""){
                 $err_string .= "Please Enter Last Name.";
               }
               if($err_string == ""){
	           	  $column1 = $_POST['column1'];
		  $column2 = $_POST['column2'];

		  // $id=$_POST['pk'];
		  // $sql="update `app_users` set $column1='$firstname',$column2='$lastname' where id=$id";
		  // mysqli_query($conn,$sql);
		  echo "Updated Successfully";
	}else{
                  echo $err_string;
                  exit;
             }
}//end of  student name update
//start of  student name update
if(isset($_POST['action']) && $_POST['action'] == "updateprimarycontact"){ 
	  $new_value=$_POST['value'];
	  if(is_array($new_value)){
	     $mobilenum = $new_value["mobilenum"];
	     $countrycode = $new_value["countrycode"];
	  }
	   $err_string = "";
	  if(trim($mobilenum) == ""){
                  $err_string .= "Please Enter Mobile Number.\n";
               }
	   if(trim($countrycode) == ""){
                 $err_string .= "Please Select Country Code.";
               }
               if($err_string == ""){
	           	  $column1 = $_POST['column1'];
		  $column2 = $_POST['column2'];

		  $id=$_POST['pk'];
		  $sql="update `app_users` set $column1='$mobilenum',$column2='$countrycode' where id=$id";
		  mysqli_query($conn,$sql);
	}else{
                  echo $err_string;
                  exit;
             }
}//end of  student name update

?>