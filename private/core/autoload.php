<?php

require("config.php");
require("database.php");
require("controller.php");
require("model.php");
require("app.php");

spl_autoload_register(function($class_name){
  
    echo $class_name . "class was not found";
});
