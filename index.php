<?php
session_start();

// Set the error reporting level to exclude warnings
error_reporting(E_ALL & ~E_WARNING);

// Disable displaying errors
ini_set('display_errors', 0);

require_once 'src/controller/front/home.php';
require_once 'src/controller/front/about.php';
require_once 'src/controller/front/team.php';


if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] === 'loginPage') {
      //  loginPage();
    }

    
    elseif ($_GET['action'] === 'teamPage') {
        teamPage();
    }
    

    elseif ($_GET['action'] === 'aboutPage') {
        aboutPage();
    }
    
    else {
       // errorPage();
      // echo 'error';
    }
} else {
    home();
}