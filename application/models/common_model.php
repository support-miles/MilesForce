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

     //code get the data from master data table
     public function getmasterdata($tablename){
            $query = $this->db->prepare("select * from ".$tablename);
            $query->execute();
            $rowscount = $query->rowcount();
            
           //echo $query->queryString;exit;  //to check the last executed query
            if($rowscount >0){
               return $data = $query->fetchAll(PDO::FETCH_ASSOC);   
            }else{
                 return array();        
            }
     }

     //dynamic insert query 
    function insertmasterdata($tablename, $insert_data=array())
    {
          if (!is_array($insert_data) || !count($insert_data)) return false;

          // your pdo connection
          $bind = ':'.implode(',:', array_keys($insert_data));
          $sql  = 'insert into '.$tablename.'('.implode(',', array_keys($insert_data)).') '.
                  'values ('.$bind.')';
          $stmt = $this->db->prepare($sql);
          $stmt->execute(array_combine(explode(',',$bind), array_values($insert_data)));
           
           if ($stmt->rowCount() > 0)
           {
               return $menuId = $this->db->lastInsertId();
           }

            return false;
    }

 }
?>