<?php
class Milestone extends Basecontroller{

     /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function milestonedashboard($parameter1 = false){
                   require 'application/models/ewb_model.php';
                   $ewbmodel = new Ewb_model();

                   $this->view->render('MILESTONE/milesstone');
     }
     

    public function dialledcallslist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MILESTONE/dialled_calls');
    }

    public function missedcallslist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MILESTONE/missed_calls');
    }

    public function untrackedcallslist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MILESTONE/untracked_calls');
    }
   public function visitorslist($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MILESTONE/visitor');
    }

  public function milestonereport($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MILESTONE/report');
    }

    public function otherwork($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MILESTONE/other_work');
    }








    public function candidateotherdetails($parameter1 = false){
         require 'application/models/ewb_model.php';
         $ewbmodel = new Ewb_model();
         $users_list_array = $ewbmodel->getusers();

         $this->view->render('MILESTONE/Master_MILESTONE_Details');
    }


}

?>