<?php
    $ser = "localhost";
    $user = "root";
    $pass = "";
    $db ="unichat";
   
    $conn = new mysqli($ser, $user, $pass, $db);

    $sql = "select message, date, Alias from message, users where message.id_u = users.id limit 10";

    $msg_bd = mysqli_query($conn, $sql);
    echo json_encode(mysqli_fetch_all($msg_bd, MYSQLI_ASSOC));
?>