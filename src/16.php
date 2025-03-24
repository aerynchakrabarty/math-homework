<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} else {
    $db = new PDO("mysql:host=localhost;dbname=math_homework", "root", "");
    
    $sql = "SELECT * FROM students WHERE username = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $_SESSION['username']);
    $result = $stmt->execute();

    if ($result) {
        echo "Hello, " . $_SESSION['username'] . "! You are registered.";
    } else {
        echo "Sorry, I don't see you here. Please register first.";
    }
}
?>
