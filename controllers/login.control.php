<?php
session_start();
require_once "../models/Usser.php";
$persons = new User();
$persons->__construct(new db());

if (isset($_POST['submitLogin'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $result = $persons->authenticate($email, $pass);


}