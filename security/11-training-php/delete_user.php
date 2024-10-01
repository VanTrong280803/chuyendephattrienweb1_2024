<?php
session_start(); 
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; 
$id = NULL; 
if (empty($_SESSION['id'])) { 
    header('location: login.php'); 
    exit();
}


$currentUserId = $_SESSION['id'];


if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    if ($id == $currentUserId) {
        $userModel->deleteUserById($id); 
        header('location: list_users.php'); 
        exit(); 
    } else {
        echo "Bạn không có quyền xóa tài khoản của người khác!";
        exit(); 
    }
}

header('location: list_users.php'); 
exit(); 
?>
