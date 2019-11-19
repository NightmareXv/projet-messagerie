<?php
    if(isset($_POST['submit']))
      {
        $ser = "localhost";
        $user = "root";
        $pass = "";
        $db ="unichat";
        
        $name = $_POST["Nom"];
        $pren = $_POST["prenom"];
        $mdpa = $_POST["mdp"];
        $mdpa2 = $_POST["mdp2"];
        $email = $_POST["email"];
        $sexe = $_POST["Sexe"];
        $pseudo=htmlspecialchars($_POST["Alias"]);
        
        if ($name&&$pren&&$mdpa&&$pseudo){
            if ($mdpa == $mdpa2){
              if (strlen($mdpa) > 6){

                $mdp = md5($mdpa);

                $conn = new mysqli($ser,$user,$pass, $db);
                if ($conn -> connect_error){
                die("connection failed : " .$conn->connect_error );
                }
                
                $ver = "SELECT * FROM users WHERE Alias ='$pseudo' AND email = '$email'" ;
                $reg = mysqli_query($conn, $ver);
                $row = mysqli_num_rows($reg);
                if ($row == 0){
                    $sql = "INSERT INTO users(nom , prenom, mdp, email, Alias, Sex) VALUES ('$name','$pren','$mdp','$email','$pseudo','$sexe')";
                    if (mysqli_query($conn, $sql)){
                    echo"inscription effectuer";
                    header('location: authen.php');
                    }
                    else {
                        echo "Error : ". $sql ."".mysqli_Error($conn);
                        }
                    $conn->close();
                    
            }
            else header('location: index.php?err=1');
        }
        else header('location: index.php?err=2'); 
    }
    else header('location: index.php?err=3');
  }
    else header('location: index.php?err=4'); 
}
      ?>