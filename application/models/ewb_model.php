<?php
 class Ewb_model extends Basemodel{

    public function __counstruct(){
         parent::__counstruct();
    }
    //code to get the users list written by chakri
    public function getusers(){
    	$query = $this->db->prepare('select * from users');
    	$query->execute();
    	$rowscount = $query->rowcount();
    	if($rowscount >0){
    	   return $data = $query->fetchAll();	
    	}else{
             return array();		
    	}
     }


 }
?>