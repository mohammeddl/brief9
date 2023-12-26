<?php
require_once "../models/Class.project.php";
session_start();
$project = new Project();
$project->__construct(new db());

if(isset($_POST['submitProjet'])){
    $name = $_POST['projectName'];
    $description = $_POST['projectDescription'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    $project->addProject($name,$description,$startDate,$endDate);
    
    header('Location: project.php');
}