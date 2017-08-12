<?php
class Mwb extends Basecontroller{

     /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function mwbdashboard($parameter1 = false){
           require 'application/models/ewb_model.php';
           $ewbmodel = new Ewb_model();

           $this->view->render('MilesWorkBook/mwb');
     }
     

    public function allcallslist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MilesWorkBook/MasterMWB');
     }
     
     public function rmallowcate($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MilesWorkBook/rm_allocate');
     }

     public function mylead($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MilesWorkBook/my_lead');
     }

     public function mwbvisitor($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MilesWorkBook/visitor');
     }

     public function mwbinquiry($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MilesWorkBook/inquiry');
     }

     

      public function allcallsotherdetailslist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MilesWorkBook/Master_MWB_Details');
     }


}

?>