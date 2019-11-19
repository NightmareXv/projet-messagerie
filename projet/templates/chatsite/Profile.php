<?php
session_start();
if(!isset($_SESSION["sess_client"])){
 header("Location: seconnecter.php");
}
else
{  
    $mail = $_SESSION['mail'];
    $Alias = $_SESSION['sess_client'];
    $mdp = $_SESSION['mdp'];
    $nom = $_SESSION['Nom'];
    $prenom = $_SESSION['Prenom'];
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profile </title>
        <link rel = "stylesheet" type = "text/css" href = "css/home.css"/>
        <link rel = "stylesheet" type = "text/css" href = "css/seconnecter.css"/>
        <script src = "script/seconnecter.js"></script>
        <script src = script/inscription.js></script>
        <script src = script/Profile.js></script>
        
        
    </head>
    <div>
    
    </div>
    <body>
        <div id ="container">
            <div id = "header">
                <h1>Uni-Chat</h1>
            </div>
            <div id = "content">
                <div id = "nav">
                    <h3>Bonjour </h3>
                    <ul>
                        <div><li><?=$_SESSION['sess_client'] ?></li></div>
                        <div><li><?=$_SESSION['mail'] ?></li></div></br></br>
                        <div><li><a  href = "profile.php">Profile</a></li></div>
                        <div><li><a  href = "chatGlobal.php">chatGlobal</a></li></div>
                        <div><li><a  href = "chatEfem.php"> Chat Efemer</a></li><div>
                        <div><li><a href = "chatprivé"> Chat Privé</a></li><div>
</br>
                        <div><li><a  href = "NousContactez">Nous contactez !</a></li></div>
</br></br>
                        <li><a class ="selected" href ="index.php">Index</a></li>
                    </ul>
                </div>
                <div id = ref >
</div>
                <div id = "Acceuil" >

                <div id = "Alias"> Votre Alias :<?php echo $Alias ?></div></br>
                <div id ="mail">Votre Adresse mail :<?php echo $mail ?></div></br>
                <div id ="nom">Votre Nom : <?php echo $nom ?></div></br>
                <div id = "prenom">Votre Prenom : <?php echo $prenom ?></div></br></br>
                <div id = "Mdp">Votre mot de passe : <?php echo $mdp ?></div></br></br>

                <div onclick ="return modifier()" style = "cursor : pointer" class = "txt">Voulez vous modifier ces informations?</div>
                

                
                </div>
            </div>
            <div id = "footer">
                Copyright &copy; 2019
            </div>
            
        </div>	
        
    </body>
    
</html>
<?php
}
?>