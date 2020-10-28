<?php
require '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username_id'])){
        http_response_code(400);
        echo json_encode("Please Enter your username or ID");
    }elseif (empty($_POST['password'])){
        http_response_code(400);
        echo json_encode("Please Enter Your Password");
    }else{
        $email = trim($_POST['username_id']);
        $password = trim($_POST['password']);
    }
}
