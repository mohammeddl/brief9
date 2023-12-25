<?php
require_once "../controllers/config.php";

class User 
{
    private $firstName;
    private $lastName;
    private $email;
    private $pass;
    private $role;
    private $project;
    private $db;

public function __construct()
{
    $this->db = new db ();
}

public function setValues($firstName, $lastName, $email, $pass)
{
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email =  $email;
    $this->pass = $pass;
}

public function insertPerson($prenom, $nom, $email, $pass)
{
    $conn = $this->db->getConnection();

    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, lastName, email, Password) VALUES(:name, :last, :email, :pass)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $nom);
    $stmt->bindParam(':last', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $hashedPassword); 

    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}


public function authenticate($email, $pass)
{
    try {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch (PDO::FETCH_ASSOC);    
        
        
        if ($row && password_verify($pass, $row['Password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_role'] = $row['Role'];
            $_SESSION['Email'] = $row['email'];
            $_SESSION['project_ID'] = $row['projet'];

            
            echo "Login successful. Welcome, {$_SESSION['user_name']}!";

            switch ($_SESSION['user_role']) {
                case "ScrumMaster":
                    $_SESSION['status'] = 'ScrumMaster';
                    header("Location: ../view/ScrumMaster.php");
                    exit;
                case "member":

                    $_SESSION['user_role'] = 'member';
                    header("Location: ../views/home.php");
                    exit;
                case "ProductOwner":
                    
                $_SESSION['user_role'] = 'ProductOwner';
                    header("Location: ../view/ProductOwner.php");
                    exit;
            }
        } else {
            return "Email or password is incorrect";
        }
    } catch (PDOException $e) {
        return "Error: " . $e->getMessage();
    }
}
}