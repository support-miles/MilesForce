<?php
class Common{
   	 /**
	 * summary
	 */
	public function __construct()
	{
             

              $browserurl = isset($_GET["url"])?rtrim($_GET["url"]):null;
	   $url= explode('/',$browserurl);

	   $file_path ='application/controllers/'.$url[0].'.php';
             if(empty($url[0])){
		require 'application/controllers/index.php';
		$indexcontroller = new Index();
		$indexcontroller->index();
		return false;
             }

	  if(file_exists($file_path)){
                 require 'application/controllers/'.$url[0].'.php';
	   }else{
	   	require 'application/controllers/404.php';
                     $errcontroller = new error();
                     return false;
	}

	   $basecontroller = new $url[0];

	   if(isset($url[1])){
	        $parameter1 =  (isset($url[2]))?$url[2]:'';
	        if(method_exists($basecontroller,$url[1])){
	             $basecontroller->{$url[1]}($parameter1);   
	        }else{
	        	
	        }         
	   }
	}

}
?>