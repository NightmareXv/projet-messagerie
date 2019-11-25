<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire d'inscription </title>
        <link rel = "stylesheet" type = "text/css" href = "css/home.css"/>
        <link rel = "stylesheet" type = "text/css" href = "css/seconnecter.css"/>
        <script src = "script/seconnecter.js"></script>
        /*<script src = "script/inscription.js"></script>

		
	</head>
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
    //echo"ok";
    $query = mysqli_query($conn, $rech);
    
    $row = mysqli_num_rows($query);
    //echo"ok";
    //echo $row;
    if ($row == 1){
        
      while ($row = mysqli_fetch_assoc($query)){

          $dbalias = $row['Alias'];
          $dbpass = $row['mdp'];
          $bdid = $row['id'];
          $mail = $row['email'];
          $mdp = $row['mdp'];
          $nom = $row['Nom'];
          $Prenom = $row['Prenom'];
          
          if ($alias == $dbalias && $mdp == $dbpass){
              session_start();
              $_SESSION['sess_user'] = $alias;
              $_SESSION['id_client'] = $bdid;
              $_SESSION['mail'] = $mail ;
              $_SESSION['mdp'] = $mdp;
              $_SESSION['Nom'] = $nom;
              $_SESSION['Prenom'] = $Prenom;
              
              header('location: Homepage.php');
          }
      }

    }
    else {
      $error = "ALIAS or PASSWORD invalid";
    }
  }
} 
?>

	<body>
        <div id ="container">
            <div id = "header">
                <h1>Uni-Chat</h1>
            </div>
            <div id = "content">
                <div id = "nav">
                    <h3>Navigation</h3>
                    <ul>
                        
                        <div><li><a  href = "Acceuil.php">Acceuil</a></li></div>
                        <div><li><a  href = "seconnecter.php">Se connecter</a></li></div>
</br>
                        <div><li><a  href = "NousContactez">Nous contactez !</a></li></div>
</br></br>
                        <li><a class ="selected" href ="index.php">Index</a></li>
                    </ul>
                </div>
                <div id = ref >
</div>
                <div id = "Acceuil" >

                    <h2>Intra-Uni</h2></br>
                    
                    <h3> Connexion </h3></br>

                    <div id = "message"> Bienvenu dans Intra-uni </div></br>

                    <form id = "inscription" action="" method="POST" >
                    
                    <label for ="Alias">Saisir pseudo :             </label>
                    <input type="text" name="Alias" require/><br></br>
                    
                    <label for ="Mdp">saisir votre mot de passe :       </label>
                    <input type="Password" name="mdp" require/><br></br>

                    <span  onclick = "return inscription()" style="cursor:pointer" class = "txt1">Vous êtes nouveau avec nous ?</span>
                        
                        
                        <br /><br /><br />
                        
                        <input type="submit" value="S'inscrire"  name = "submit"/>
</form>
                    
<span><?php echo $error; ?></span>
                </div>
            </div>
            <div id = "footer">
                Copyright &copy; 2019
            </div>
             
        </div>	
		
	</body>
	
</html>