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

    public function addProject($name, $description, $startDate, $endDate) {
        try {
            $conn = $this->db->getConnection();
            $stmt = $conn->prepare("INSERT INTO projects (name, description, start_date, end_date) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $description, $startDate, $endDate]);
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
     }

    public function getAllProjects() {
        $conn = $this->db->getConnection();
        $stmt = $conn->query("SELECT * FROM projects");
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}