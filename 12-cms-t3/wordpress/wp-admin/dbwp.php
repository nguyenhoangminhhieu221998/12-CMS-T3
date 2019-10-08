<?php include '../wp-config.php';
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $email = "";
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['id'])){
        $sql = "UPDATE `wp_posts` SET `post_email` = '". $email ."' WHERE `wp_posts`.`ID` = ". $_POST['id'];    
        $result = mysqli_query($conn, $sql);
    }
   