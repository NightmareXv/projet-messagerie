<?php
session_start();
if(!isset($_SESSION["sess_client"])){
 header("Location: authen.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Uni-Chat</title>
<link rel="stylesheet" href="home.css">
</head>
<h1>Welcome to Uni-Chat</h1>
<p>This is the Home Page</p>
<div style = "text-align : right" >
<?=$_SESSION['sess_client'] ; $id = $_SESSION['id_client']?> !<a href="logout.php" >Logout</a>
</div>
<br><br>
<body>
<?php
 $ser = "localhost";
 $user = "root";
 $pass = "";
 $db ="projetchat";

 $conn = new mysqli($ser, $user, $pass, $db);

 if (isset($_POST['message']) && isset($_POST['submit'])){
     
    $ser = "localhost";
    $user = "root";
    $pass = "";
    $db ="projetchat";
    $conn = new mysqli($ser, $user, $pass, $db);

    $message = $_POST['message'];
    
    $sql = "INSERT INTO message ( message, id_client, data) VALUES ('$message','$id', NOW())";

    mysqli_query($conn, $sql);  
 }

    
?>
<div >
    <form action ="" method = "POST" style = "text-align : center" >
    <div style=" height:180; overflow:auto;">
        <text-overflow type = "text-overflow" name = "overflow">
       
    
       
    </div>
    

        <input type ="TEXTAREA" placeholder = "saisir votre message" name = "message">
        <input type="submit" name ="submit" value="envoyer">
    </form>
</div>

</html>
<?php
}
?>