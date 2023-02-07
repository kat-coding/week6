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

    //add favorite food and color
    $f3->set('food', 'sushi');
    $f3->set('color', 'teal');

    $f3->set('radius', 10);

    $f3->set('fruits', array("apple", "banana", "orange", "strawberry") );
    $f3->set('colors', array("red", "blue", "orange"));

    $cupcakes = array("chocolate"=>"Chocolate Ganace", "strawberry"=>"Strawberry Shortcake", "maple"=>"Maple Walnut");
    $f3->set('cupcakes', $cupcakes);

    $f3->set('age', 38);

    $view = new Template();
    echo $view-> render('views/info.html');
});

//run instance of fat-free
$f3->run();
