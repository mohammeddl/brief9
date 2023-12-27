<?php
require_once "../models/Class.project.php";
session_start();
$project = new Project();
$project->__construct(new db());

if(isset($_POST['submitProjet'])){
    $id = $_POST['idUsser'];
    $name = $_POST['projectName'];
    $description = $_POST['projectDescription'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    $project->addProject($name,$description,$startDate,$endDate,$id);
    
    header('Location: project.php');
}
if(isset($_POST['delete_project'])) {

    $projectId = $_POST['project_id'];

    $project->deleteProject($projectId);
}


// if (isset($_POST['edit_project'])) {
//     // Get the project ID
//     $projectId = $_POST['project_id']; 

//     // Fetch the project details from the database using $projectId
//     $projectDetails = $project->getProjectDetails($projectId);

//     // Now, you can use these details to pre-fill the form in your modal or redirect to an edit page.
//     // Example: Redirect to an edit page with the project ID
//     header("Location: edit_project.php?id=$projectId");
//     exit();
// }

function editAchtion(){

    $id = $_POST['id'];
}