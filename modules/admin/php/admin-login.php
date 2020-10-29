<?php
require '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username_id = trim($_POST['username_id']);
    $password = trim($_POST['password']);

    if (empty($_POST['username_id'])){
        http_response_code(400);
        echo json_encode("Please Enter your username or ID");
    }elseif (empty($_POST['password'])){
        http_response_code(400);
        echo json_encode("Please Enter Your Password");
    }else{
        try {
            $sql = "SELECT * FROM admin WHERE username =:username";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                'username'=>$username_id
            ]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() == 0){
                http_response_code(400);
                echo json_encode("Wrong Credentials");
            }elseif (!password_verify($password, $data['password'])){
                http_response_code(400);
                json_encode("Wrong Credentials");
            }else{
                http_response_code(200);
                echo json_encode("Processing...");
                $_SESSION['username'] = $data['username'];
                $_SESSION['admin_id'] = $data['admin_id'];
                $_SESSION['login'] = 'Success';
                echo '<script>window.location.assign("http://localhost/app.portal/modules/admin")</script>';
            }

        }catch (PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }
    }
} else {
    http_response_code(400);
    echo json_encode("Ooops");
}

exit;
