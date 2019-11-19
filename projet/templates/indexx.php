<?php
session_start();
if(!isset($_SESSION["sess_client"])){
 header("Location: ../seconnecter.php");
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
<h1>Welcome to intra-uni</h1>
<p>This is the Home Page</p>
<div >
<?=$_SESSION['sess_client'] ; $id = $_SESSION['id_client']?> !<a href="logout.php" >Logout</a>
</div>
<br><br>
<body>

}
?>