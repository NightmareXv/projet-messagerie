<?php
 session_start();
 include("Scriptphp/envoi.php");


if(!isset($_SESSION["sess_client"])){
 header("Location: seconnecter.php");
}
else
{  
    $mail = $_SESSION['mail'];
    $Alias = $_SESSION['sess_client'];
    $mdp = $_SESSION['mdp'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/homechat.css">

    <script src ="script/homechat.js"></script>
       
		

    <script src = "script/Globale.js"></script>

    <script src = script/inscription.js></script>
    <script src = "script/seconnecter.js"></script>
	<title>Le Chat Global </title>
        
    <link rel="stylesheet" href="css/homechat.css">
        
    
	</head>

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
                <div id = "Acceuil" >

                    <h2>Intra-Uni</h2></br>
                    
                    <h3> Chat Globale</h3></br>
                    <div id = "msg">

                    </div>
                    
                
                    <div class="chatbody">
                    <div class="panel panel-primary">
                        <div class="panel-heading top-bar">
                            <div class="col-md-8 col-xs-8">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Open</h3>
                            </div>
                        </div>
                        <div class="panel-body msg_container_base" id="list-messages">
                           
                            
                        </div>
                        <div class="panel-footer">
                            <form method ='POST' action ='Scriptphp/envoi_msg.php'>
                                <div class="input-group">
                                    <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm" id="btn-chat"><i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
                    </br></br></br>

                
                    <span  onclick = "return Prive()" style="cursor:pointer" class = "txt1">Basculer sur le Chat Privé</span> </br></br>
                    <span  onclick = "return efemer()" style="cursor:pointer" class = "txt1">Basculer sur le Chat Efemer</span> </br>
                        

                    
                    <p></p>
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