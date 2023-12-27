<?php
require_once "../controllers/config.php";

class Task
{
    private $name;
    private $description;
    private $status;
    private $db;

    public function __construct()
    {
        $this->db = new db();
    }

    public function addTask($name, $description, $status, $deadline, $projet_id, $user_id)
    {
        try {
            $conn = $this->db->getConnection();
            $stmt = $conn->prepare("INSERT INTO tasks (name, description, project_id, id_user, status, deadline) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$name, $description, $projet_id, $user_id, $status, $deadline]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAllTasks($id)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->query("SELECT * FROM tasks WHERE project_id= $id");
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteTask($id)
    {
        try {
            $conn = $this->db->getConnection();
            $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function updateTask($id, $name, $description, $status, $deadline)
    {

        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("UPDATE tasks set name = :name, description= :description, status = :status, deadline = :deadline  WHERE id = ?");
        $stmt->execute([$name, $description, $status, $deadline, $id]);
    }
}
