<?php
require_once "../models/Usser.php";
$persons = new User();
$persons->__construct(new db());

if(isset($_POST['submitRegister'])){
    $firstName=$_POST['first_name'];
    $lastName=$_POST['last_name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $persons->setValues($firstName, $lastName, $email, $pass);

    if ($persons->insertPerson($firstName, $lastName, $email, $pass)) {
        header("Location: ../views/login.php");
        exit;
    } else {

       header("Location: ../views/404.php");
    }

}
