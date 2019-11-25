<?php
session_start();
    if (isset($_SESSION['sess_client'])){
        $id = $_SESSION['id_client'];
        
        if (isset($_POST['submit'])){
            $message = $_POST['message'];
            
            $ser = "localhost";
            $user = "root";
            $pass = "";
            $db ="unichat";

            $conn = new mysqli($ser, $user, $pass, $db);
            
            if ($conn -> connect_error){
                die("connection failed : " .$conn->connect_error );
            }
        }
    }
    //echo $id;
    $sql = "INSERT INTO message ( Message, id_u ) VALUES ('$message','$id')";
    $msg_bd = mysqli_query($conn, $sql);
    echo json_encode(mysqli_fetch_all($msg_bd), MYSQLI_ASSOC);
?>