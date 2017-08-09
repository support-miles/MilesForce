<?php
class Index extends Basecontroller{

     /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index($parameter1 = false){
         $this->view->render('index');
     }

     public function logincheck(){
         require 'application/models/common_model.php'; //load required models , library
         $commonmodel = new Common_model(); //create objects for reference
          $user_details = array();
          $username = isset($_POST['username'])?$_POST['username']:'';
          $password = isset($_POST['password'])?$_POST['password']:'';
          
         $user_details = $commonmodel->checklogin($username,$password);

         if(is_array($user_details) && count($user_details) >0){
             Session::init();
             Session::set('username',$username);
             Session::set('LoggedIn',true);
             //$this->dashboard();
             header('location:'.URL.'dashboard/dashboarddata');
         }else{
             $this->view->msg = "Username or password not matched ! Please try again;";
             $this->view->render('index');
         }
    }

     //dashboard function
     // public function dashboard(){
             
     //    $this->view->render('common/dashboard');
     // }

    //logout function
     public function logout(){
         Session::destroy();
         header('location:'.URL.'');
     }
     

}

?>