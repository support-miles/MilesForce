<?php

function __autoload($class){
  require 'application/lib/'.$class.'.php';
}
//load default libraries 
// require 'application/lib/common.php';
// require 'application/lib/basecontroller.php';
// require 'application/lib/basemodel.php';
// require 'application/lib/baseview.php';
// require 'application/lib/database.php';
// require 'application/lib/session.php';

//load config 
require 'application/config/config.php';
require 'application/config/database.php';

$app =new common();

?>