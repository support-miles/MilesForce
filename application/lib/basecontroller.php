	<?php
/**
 * summary
 */
class Basecontroller //extends ExtendsName
{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        $this->view = new Baseview();
	    }
	    public function loadmodel($modelname){
	              $modelpath = 'models/'.$modelname.'_model.php';
	              if(file_exists($modelpath)){
	                 require $modelpath;
	                 $modelname = $modelname.'_model.php';
	                 $this->model = new $modelname();
	              }
	    }
}

?>