<?php
if(!isset($_SESSION["sess_client"])){
    header("Location: seconnecter.php");
   }
   else
   {  
       $Alias = $_SESSION['sess_client'];
       $id = $_SESSION['id_client'];

   }
   //echo $Alias , " ",$id ;
if(isset($_POST['submit'])){
    if(isset($_POST['message'])){
        $message = $_POST['message'];

            $ser = "localhost";
            $user = "root";
            $pass = "";
            $db ="unichat";

            $conn = new mysqli($ser, $user, $pass, $db);
            $sql = "INSERT INTO message ( message, id_u ) VALUES ('$message','$id')";
            $msg_bd = mysqli_query($conn, $sql) or die ("Error ".mysqli_error($conn));
            //json_encode(mysqli_fetch_all($msg_bd, MYSQLI_ASSOC));
            if ($conn -> connect_error){
                die("connection failed : " .$conn->connect_error );
            }
        }
    }
    //echo $id;
   
    //echo $sql;
    //$msg_bd = mysqli_query($conn, $sql) or die ("Error ".mysqli_error($conn));
    //echo mysqli_fetch_assoc($msg_bd);

?>