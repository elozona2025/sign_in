<?php
require 'connect.php'; 
session_start();

$username = trim($_POST['username']);
$password = md5($_POST['password']);

try {
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    $stmt = $conn->query($sql);

    if ($user = $stmt->fetch(PDO::FETCH_OBJ)){
        // echo 'welcome';
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        //header('Location: login.php');
    } else{
        $_SESSION['login_error'] = 'wrong username or Password';
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
} catch (\PDOException $e) {
    throw $e;
}