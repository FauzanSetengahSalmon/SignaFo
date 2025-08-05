<?php
include '../Connection/Connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if($users = $result->fetch_assoc()) {
    $role = $users['role'];

    if($role == 'student') {
        header("Location: ../Student/Student.php");
        exit();
    } else if($role == 'admin') {
        header("Location: ../Admin/Admin.php");
        exit();
    } else {
        echo "Invalid role.";
        exit();
    }
} else {
    echo "Invalid email or password.";
    exit();
}
?>