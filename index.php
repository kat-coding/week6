<?php
//this is the controller, all requests go through this page

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//start session
session_start();

//require autoload file created by composer
require_once("vendor/autoload.php");

//Create an instance of the base class of fat-free
$f3 = Base::instance();


//define default route -> diner.html
$f3->route('GET /', function ($f3){
    $f3->set('username', 'kittyKat');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with templates');

    $view = new Template();
    echo $view-> render('views/info.html');
});

//run instance of fat-free
$f3->run();
