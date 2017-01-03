<?php

    session_start();
    
    function __autoload($class) {
    require_once "../lib/$class.php";
    }
    
    

$classes = include '../config/conf.php';
$showClass = false;
$showedClass = '';

if (!empty($_POST)) {    
    $dir = '../lib';
    $files = scandir($dir);    
    $files = array_diff($files, ['.', '..']);
   
   if (!empty($files) && !empty($classes)) {       
       foreach ($classes as $key => $aClass) {
           if (isset($_POST[$key])) {
               $showClass = true;
               $showedClass = $aClass;
               $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
               $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
               break;
           }
       }
           
   }  

}




if ($showClass === true) {
    $object = new $showedClass($num1, $num2);
    $result = $object->doAction();
    $_SESSION['result'] = 'Resault is ' . $result;
    header("Location: /");
    die();

}


$home = true;
include '../tpl/main.php';

