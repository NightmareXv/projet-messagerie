<?php
$error = '';

if(isset($_POST['submit'])){
  if (empty($_POST['alias']) || empty($_POST['mdp'])){
    $error = "Alias and passe word should be written";
  }
  else {
    $ser = "localhost";
    $user = "root";
    $pass = "";
    $db ="projetchat";
    
    $alias =$_POST['alias'];
    $mdp =md5($_POST['mdp']);

    $dbalias = '';
    $dbpass = '';
    $conn = new mysqli($ser,$user,$pass, $db);
    
    $rech = "SELECT * FROM client WHERE alias = '$alias' and mot_de_pass = '$mdp'";
    $query = mysqli_query($conn, $rech);

    $row = mysqli_num_rows($query);

    if ($row == 1){
      while ($row = mysqli_fetch_assoc($query)){
          $dbalias = $row['alias'];
          $dbpass = $row['mot_de_pass'];
          $bdid = $row['id'];
          if ($alias == $dbalias && $mdp == $dbpass){
              session_start();
              $_SESSION['sess_client'] = $alias;
              $_SESSION['id_client'] = $bdid; 
              header('location: indexx.php');
          }
      }

    }
    else {
      $error = "ALIAS or PASSWORD invalid";
    }
  }
} 
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chat de la communaté | Page d'inscription</title>
  <link rel="stylesheet" href="styleauth.css">
  

</head>

<body>

<div class="login">
<h1 align ="center">Se connecter </h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="alias" name="alias"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="mdp"><br/><br/>
<input type="submit" value="Se connecter" name="submit">
<span class = "txt1">
  Vous êtes  
</span>
<a class = "txt2" href = 'inscription.php'>
  nouveau avec nous ?
</a>
<!-- Error Message -->
<span><?php echo $error; ?></span>

</body>

</html>