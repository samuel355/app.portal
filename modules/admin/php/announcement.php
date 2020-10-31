<?php
require '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (empty($_POST['title'])){
        http_response_code(400);
        echo json_encode('Please add Title');
    }elseif (empty($_POST['content'])){
        http_response_code(400);
        echo json_encode('Please Add the message');
    }else{
        $title = trim($_POST['title']);
        $content = trim($_POST['content']);
        $posted_date = date("M n, Y") ." At ". date("h:i A");
        $author_id = $_POST['author_id'];
        $author_firstname = $_POST['author_firstname'];
        $author_lastname = $_POST['author_lastname'];

        try{
            $sql = "INSERT INTO announcements(title, message, author_firstname, author_lastname, author_id, posted_date)
                    VALUES  (:title, :message, :author_firstname, :author_lastname, :author_id, :posted_date)";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':title'=>$title,
                ':message' =>$content,
                ':author_firstname' => $author_firstname,
                ':author_lastname' =>$author_lastname,
                ':author_id' => $author_id,
                ':posted_date' => $posted_date
            ]);
            $post_id = $db->lastInsertId();

        }catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }

        http_response_code(200);
        echo json_encode("You have send an announcement successfully");

    }
}
else {
    http_response_code(400);
    echo json_encode("Ooops");
}

exit;
