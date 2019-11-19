<?php
    $ser = "localhost";
    $user = "root";
    $pass = "";
    $db ="projetchat";
   
    $conn = new mysqli($ser, $user, $pass, $db);


    $sql = "SELECT message, id_client, date FROM message limit 10";

    
    $msg_bd = mysqli_query($conn, $sql);
    echo json_encode(mysqli_fetch_all($msg_bd, MYSQLI_ASSOC));

?>