<?php
    $site_title = "Web Development II";
    $divider = " | ";

// enable error messages
error_reporting(-1);
ini_set("display_errors", 1);


//auto include classes
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.class.php'; 
});