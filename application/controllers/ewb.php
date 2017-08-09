<?php
class Ewb extends Basecontroller{

     /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        //check is login 
        Session::init();
        $islogedin = Session::get('LoggedIn');
        if($islogedin == false){
            header('location:'.URL.'');
            exit;
        }
    }

    public function ewblist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();
       
         $this->view->render('EnrollWorkBook/ewb');
     }
     public function ewbotherdetailslist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('EnrollWorkBook/Master_EWB_Details');
     }


}

?>