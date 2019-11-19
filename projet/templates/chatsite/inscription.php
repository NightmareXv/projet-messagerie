<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire d'inscription </title>
        <link rel = "stylesheet" type = "text/css" href = "css/home.css"/>
        <link rel = "stylesheet" type = "text/css" href = "css/inscription.css"/>
        <script src = script/inscription.js></script>
        <script src = "script/seconnecter.js"></script>
       
		
	</head>

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
                <div id = "Acceuil" >

                    <h2>Intra-Uni</h2></br>
                    
                    <h3> Formulaire d'inscription </h3></br>

                    <div id = "message"> Tous les champs doivent etre remplit </div>
                    <form id = "inscription" action="Scriptphp/inscri.php" method="POST" >
                        
                        <label for ="nom">Veuillez saisir votre Nom :             </label>
                        <input type="text" name="nom" require/><br>
                        
                        <label for ="prenom">Veuillez saisir votre Prénom :       </label>
                        <input type="text" name="prenom" require/><br>
                        
                        <label for = "mdp">Veuillez saisir votre mot de passe :   </label>
                        <input type="password" name="mdp" require/><br>
                        
                        <label for = "mdp2">confirmation mot de passe</label>
                        <input type="password" name="mdp2"require/><br>
                        
                        <label for = "e-mail">Veuillez saisir votre adresse mail :</label>
                        <input type="email" name="e-mail" placeholder ="exemple : charles.paperman@email.fr" required/><br>
                        
                        <label for = "e-mail1">confirmez votre adresse mail :     </label>
                        <input type="email" name="e-mail1" required/><br>

                        <label for ="Alias"> Alias / NickName :                  </label>
                        <input type="text" name="Alias"  require/><br>
                        
                        <span>Ce nom va être utiliser durant votre sejour dans notre chat</span>
                        <br /><br /><br />


                        
                        <input type="submit" value="S'inscrire" name = "submit"/>

                        <span  onclick = "return authentif()" style="cursor:pointer" class = "txt1">Vous avez déja un compte ?</span> </br>
                        
</form>
                    
                    <p></p>
                </div>
            </div>
            <div id = "footer">
                Copyright &copy; 2019
            </div>
             
        </div>	
		
	</body>
	
</html>