<?php
class Error extends Basecontroller{
   
      public function __construct(){
	parent::__construct();
	$this->view->msg = "This page is not available!";
      	$this->view->render('error');
      }

}


?>