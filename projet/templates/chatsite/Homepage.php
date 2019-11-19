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
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire d'inscription </title>
        <link rel = "stylesheet" type = "text/css" href = "css/home.css"/>
        <link rel = "stylesheet" type = "text/css" href = "css/seconnecter.css"/>
        <script src = "script/seconnecter.js"></script>
        <script src = script/inscription.js></script>
        
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
                        <div><li><?php echo $Alias ?></li></div>
                        <div><li><?php echo $mail ?></li></div></br></br>
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