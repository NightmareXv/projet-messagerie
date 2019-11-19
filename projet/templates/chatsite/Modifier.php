<?php
session_start();

if(isset($_SESSION["sess_client"])){
    if(isset($_POST['submit'])){

    $Alias = '';
    $mail = '';
    $Name = '';
    $Prenom = '';
    $mdp = '';
    
    $ser = "localhost";
    $user = "root";
    $pass = "";
    $db ="unichat";

    $dbalias = '';
    $dbpass = '';
    
    $conn = new mysqli($ser,$user,$pass, $db);
    if ($conn -> connect_error){
        die("connection failed : " .$conn->connect_error );
        }
    }

    $id = $_SESSION['id_client'];
    $query = "UPDATE users SET Alias = '$Alias' WHERE id = '$id'";
    
    if (isset($_POST['NewAlias'])){
        $Alias = $_POST['Newalias'];
        $verif = "SELECT * from users WHERE Alias = '$Alias'";
        
        $query = mysqli_query($conn, $verif);
        $row = mysqli_num_rows($query);
        if ($row == 1){
            $err = "Pseudo déja utilisé";
        }
        else {
        $query = "UPDATE users SET Alias = '$Alias' WHERE id = '$id'";
        $query = mysqli_query($conn, $verif);
        }
    }
    
    if (isset($_POST['Newname'])){
        $Name = $_POST['Newname'];
        $query = "UPDATE users SET Nom = '$Name' WHERE id = '$id'";
        $query = mysqli_query($conn, $verif);
    }

    if (isset($_POST['NewPrenom'])){
        $Prenom = $_POST['NewPrenom'];
        $query = "UPDATE users SET Prenom = '$Prenom' WHERE id = '$id'";
        $query = mysqli_query($conn, $verif);
    }
    if (isset($_POST['Newpass'])){
        $mdp = md5($_POST['Newpass']);
        $query = "UPDATE users SET mdp = '$mdp' WHERE id = '$id'";
        $query = mysqli_query($conn, $verif);
    }

    if (isset($_POST['Newmail'])){
        $mail = $_POST['Newmail'];
        $query = "UPDATE users SET email = '$mail' WHERE id = '$id'";
        $query = mysqli_query($conn, $verif);

    }
    

    
    






?>