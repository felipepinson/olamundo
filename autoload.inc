<?php
spl_autoload_register ( function($className){
  $filename = str_replace("\\", DIRECTORY_SEPARATOR, $className);
  require_once("{$filename}.class.php");
});


