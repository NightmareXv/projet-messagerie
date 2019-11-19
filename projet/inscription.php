<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chat de la communaté | Page d'inscription</title>
  <style rel="stylesheet" href="StyleSheet.css"></style>
  <script src="script.js"></script>
  
  <header>
  <h1>Uni-Chat</h1>
  <nav style = "text-align : right">
    <a href=#>About</a>
    <a href=#>Services</a>
    <a href=#>Contact</a>
  </nav>
</header>
</head>

<body>
    <br><br><br>
    <div  class = "container" id = "inscrip">  
      <form action="" method="POST" style = "text-align : center">
      
          <label for ="nom">Veuillez saisir votre Nom :</label>
          <input type="text" name="nom" value="" require/><br>

          <label for ="prenom">Veuillez saisir votre Prénom :</label>
          <input type="text" name="prenom" value="" require/><br>

          <label for = "mdp">Veuillez saisir votre mot de passe :</label>
          <input type="password" name="mdp" value="" require/><br>
          
          <label for = "mdp2">confirmation mot de passe : </label>
          <input type="password" name="mdp2" value="" require/><br>

          <label for = "e-mail">Veuillez saisir votre adresse mail :</label>
          <input type="text" name="e-mail" value="" placeholder ="exemple : charles.paperman@email.fr" required/><br>

          <label for = "e-mail1">confirmez votre adresse mail :</label>
          <input type="text" name="e-mail1" value="" placeholder ="verifier votre e-mail"/><br>

          <label for ="pseudo"> Alias / NickName : </label>
          <input type="text" name="pseudo" value="" require/><br>
          <span>Ce nom va être utiliser durant votre sejour dans notre chat</span>
          <br /><br /><br />

          
          <input type="submit" value="submit", name = "submit"/>

      </form>
    </div>  
    <?php
    if(isset($_POST['submit']))
      {
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db ="projetchat";
        
        $name = $_POST["nom"];
        $pren = $_POST["prenom"];
        $mdpa = $_POST["mdp"];
        $mdpa2 = $_POST["mdp2"];
        $email = $_POST["e-mail"];
        $email1 = $_POST["e-mail1"];
        $pseudo=htmlspecialchars($_POST["pseudo"]);
        
        if ($name&&$pren&&$mdpa&&$pseudo){
            if ($mdpa == $mdpa2){
              if (strlen($mdpa) > 6){

                $mdp = md5($mdpa);

                $conn = new mysqli($ser,$user,$pass, $db);
                if ($conn -> connect_error){
                die("connection failed : " .$conn->connect_error );
                }
                
                $ver = "SELECT * FROM client WHERE alias ='$pseudo' AND email = '$email'" ;
                $reg = mysqli_query($conn, $ver);
                $row = mysqli_num_rows($reg);
                if ($row == 0){
                    $sql = "INSERT INTO client(nom , prenom, mot_de_pass, email, alias) VALUES ('$name','$pren','$mdp','$email','$pseudo')";
                    if (mysqli_query($conn, $sql)){
                    echo"inscription effectuer";
                    header('location: indexx.php');
                    }
                    else {
                        echo "Error : ". $sql ."".mysqli_Error($conn);
                        }
                    $conn->close();
                    
            }
            else echo "ce pseudo existe deja";
        }
        else echo "mot de pass trop cours";
    }
    else echo "les deux mot de passe doivent etre similaire";
  }
    else echo "veuillez remplir les champs nom prenom e-mail";
}
      ?>
</body>
</html>