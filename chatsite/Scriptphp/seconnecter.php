<?php

$error = '';

if(isset($_POST['submit'])){
  if (empty($_POST['Alias']) || empty($_POST['mdp'])){
    $error = "Alias and passe word should be written";
    
  }
  else {
    
    $ser = "localhost";
    $user = "root";
    $pass = "";
    $db ="unichat";

    $alias =$_POST['Alias'];
    $mdp =md5($_POST['mdp']);

    echo $alias,$mdp;

    $dbalias = '';
    $dbpass = '';
    $conn = new mysqli($ser,$user,$pass, $db);
    if ($conn -> connect_error){
        die("connection failed : " .$conn->connect_error );
        }


    $rech = "SELECT * FROM users WHERE Alias = '$alias' AND mdp = '$mdp'";
    echo"ok";
    $query = mysqli_query($conn, $rech);
    
    $row = mysqli_num_rows($query);
    echo"ok";
    echo $row;
    if ($row == 1){
        
      while ($row = mysqli_fetch_assoc($query)){

          $dbalias = $row['Alias'];
          $dbpass = $row['mdp'];
          //$bdid = $row['id'];
          $mail = $row['email'];
          
          if ($alias == $dbalias && $mdp == $dbpass){
              session_start();
              $_SESSION['sess_user'] = $alias;
              //$_SESSION['id_client'] = $bdid;
              $_SESSION['mail'] = $mail ;
              header('location: ../Homepage.php');
          }
      }

    }
    else {
      $error = "ALIAS or PASSWORD invalid";
    }
  }
} 
?>