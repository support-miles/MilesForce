<?php
class Splitdata extends Basecontroller{
   /**
    * summary
   */
   public function __construct()
   {
        parent::__construct();
   }

   public function dbdatasplit($parameter1 = false){
         require 'application/models/common_model.php'; //load required models , library
         $commonmodel = new Common_model(); //create objects for reference
         $tablename = "master_data";
         $masterdata = $commonmodel->getmasterdata($tablename); //fetching maser data
          //print_r( $masterdata);exit;
          if(is_array($masterdata) && count($masterdata) >0){  //spliting master data to different tables
              $mastertablename = "table1"; 
              $count = 0;
          	   foreach ($masterdata as $md) {//loop master data

          	   	//insert into first table
          	   	$insert_data = array(
          	   		"can_id"=>$md['can_id'],
          	   		"can_first_name"=>$md['can_first_name'],
          	   		"can_last_name"=>$md['can_last_name'],
          	   		"street_address"=>$md['street_address'],
          	   	);

      	            $last_insert_id = $commonmodel->insertmasterdata($mastertablename,$insert_data);
          	     	 if($last_insert_id >0){ //forming array to insert into other with reference of first table
	                     $insert_data2[] = array(
	          	   		"table1_id"=>$last_insert_id,
	          	   		"phone"=>$md['phone'],
	          	   		"email"=>$md['email'],
	          	   	);
	                      $insert_data3[] = array(
	          	   		"table1_id"=>$last_insert_id,
	          	   		"study"=>$md['study'],
	          	   		"designation"=>$md['designation'],
	          	   		"experience"=>$md['experience'],
	          	   	);
          	      	}
          	      	$count++;
          	   }//end loop
              
	             if(isset($insert_data2) && count($insert_data2) >0){ //inserting into other tables
	                  $secondtablename = "table2";
	                  foreach ($insert_data2 as $id2) {
	                  	 $last_insert_id = $commonmodel->insertmasterdata($secondtablename,$id2);
	                  }//end loop
	             }//end if

	             if(isset($insert_data3) && count($insert_data3) >0){ //inserting into other tables
	                  $thirdtablename = "table3";
	                  foreach ($insert_data3 as $id3) {
	                  	 $last_insert_id = $commonmodel->insertmasterdata($thirdtablename,$id3);
	                  }//end loop
	             }//end if
            echo "Total Candidates inserted ".$count;
        }else{
         	echo 'No data Available to process.';
        }
       // print_r($masterdata);exit;
   }//end function

}
?>