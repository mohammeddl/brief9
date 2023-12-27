<?php
require_once "../controllers/config.php";

class Project
{
    private $name;
    private $description;
    private $db;

    public function __construct()
    {
        $this->db = new db();
    }

    public function addProject($name, $description, $startDate, $endDate, $id)
    {
        try {
            $conn = $this->db->getConnection();
            $stmt = $conn->prepare("INSERT INTO projects (name, description, start_date, end_date, id_user) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $description, $startDate, $endDate, $id]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAllProjects($id)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->query("SELECT * FROM projects WHERE id_user= $id");
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserIdByProjectId($id)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->query("SELECT * FROM projects WHERE id= $id");
        $rows = $stmt->rowCount();
        if ($rows > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['id_user'];
        }
        return null;
    }

    public function deleteProject($projectId)
    {
        try {
            $conn = $this->db->getConnection();
            $stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
            $stmt->execute([$projectId]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function updatepro($projectId)
    {

        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("UPDATE projects set name = :name , description= WHERE id = ?");
        $stmt->execute([$projectId]);
    }
}
