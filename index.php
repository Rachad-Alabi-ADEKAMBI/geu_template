<?php
session_start();

// Set the error reporting level to exclude warnings
error_reporting(E_ALL & ~E_WARNING);

// Disable displaying errors
ini_set('display_errors', 0);

require_once 'src/controller/front/home.php';


if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] === 'loginPage') {
      //  loginPage();
    }

    
    elseif ($_GET['action'] === 'contactPage') {
        //contactPage
    }
    

    elseif ($_GET['action'] === 'aboutPage') {
      //  aboutPage();
    }
    
    else {
       // errorPage();
      // echo 'error';
    }
} else {
    home();
}