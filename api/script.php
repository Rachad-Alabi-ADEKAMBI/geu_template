<?php
    include 'functions.php';
$action = $_GET['action'] ?? '';


if ($action == 'newDoc') {
   newDoc();
}

if ($action == 'allDocs') {
        getAllDocs();
 }

 if ($action == 'simpleDocs') {
    getSimpleDocs();
}

if ($action == 'gasDocs') {
    getGasDocs();
}

if ($action == 'electricityDocs') {
    getElectricityDocs();
}

if($action == 'login'){
    login();
}

if($action == 'logout'){
    logout();
}
