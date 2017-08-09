<?php
 class Common_model extends Basemodel{

    public function __counstruct(){
         parent::__counstruct();
    }

    //code to check the  user  written by chakri
    public function checklogin($username = '',$password = ''){

    	$query = $this->db->prepare("select txt_registration_id,username,email from tbl_users where username= '$username' and txt_password = '$password' ");
    	$query->execute();
    	$rowscount = $query->rowcount();
        
           //echo $query->queryString;  //to check the last executed query
        if($rowscount >0){
    	   return $data = $query->fetchAll();	
    	}else{
             return array();		
    	}

     }


 }
?>