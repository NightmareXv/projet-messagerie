<?php
 if(isset($_POST['submit']))
 {
   $ser = "localhost";
   $user = "root";
   $pass = "";
   $db ="unichat";
   
   $name = $_POST["nom"];
   $pren = $_POST["prenom"];
   $mdpa = $_POST["mdp"];
   $mdpa2 = $_POST["mdp2"];
   $email = $_POST["e-mail"];
   $email1 = $_POST["e-mail1"];
   $Alias=$_POST["Alias"];
   
   if ($name&&$pren&&$mdpa&&$Alias){
       if ($mdpa == $mdpa2){
         if (strlen($mdpa) > 6){

           $mdp = md5($mdpa);

           $conn = new mysqli($ser,$user,$pass, $db);
           if ($conn -> connect_error){
           die("connection failed : " .$conn->connect_error );
           }
           
           $ver = "SELECT * FROM users WHERE Alias ='$Alias' AND email = '$email'" ;
           $reg = mysqli_query($conn, $ver);
           $row = mysqli_num_rows($reg);
           echo $row;
           if ($row == 0){
               $sql = "INSERT INTO users (alias, nom ,prenom, mdp, email ) VALUES ('$Alias', '$name','$pren','$mdp','$email')";
               if (mysqli_query($conn, $sql)){
               echo"inscription effectuer";
               header('location: ../seconnecter.php');
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
      