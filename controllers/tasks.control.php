<?php
require_once "../models/Class.project.php";
require_once "../models/Class.task.php";
$project = new Project();
$project->__construct(new db());


if (!isset($_SESSION['user_id'])) {
    header('location:../views/404.php');
} else {
    $projectId = $_GET['id'];
    $userId = $project->getUserIdByProjectId($projectId);
    if ($userId !== $_SESSION['user_id']) {
        // echo $userId;
        // echo 'test';
        // echo $_SESSION['user_id'];
        header('location:../views/404.php');
    }
}


function editAchtion()
{

    $id = $_POST['id'];
}
