<?php
require("app.php");
require("config.php");
require("controller.php");
require("db.php");
require("model.php");

spl_autoload_register(function($class_name){
    require "../private/models/". ucfirst($class_name) . ".php" ;
})


?>