<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chat de la communaté | Page d'inscription</title>
  <link rel="stylesheet" href="stylechat.css">
  <script src="chat.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

  
  <?php session_start(); include('co.php'); $db = db_connect(); ?>

</head>

<body>
    <div id="container">
        <h1>Mon super chat</h1>
        <?php
// permettra de créer l'utilisateur lors de la validation du formulaire
if(isset($_POST['login']) AND !preg_match("#^[-. ]+$#", $_POST['login'])) {
}

/* Si l'utilisateur n'est pas connecté, 
d'où le ! devant la fonction, alors on affiche le formulaire */
if(!user_verified()) {
?>
<div class="unlog">
	<form action="" method="post">
	Indiquez votre pseudo afin de vous connecter au chat. 
	Aucun mot de passe n'est requis. Entrez simplement votre pseudo.<br><br>
				
	<center>
		<input type="text" name="login" placeholder="Pseudo" /><br />
                <input type="password" name="pass" placeholder="Mot de passe" /><br /> 
		<input type="submit" value="Connexion" />
	</center>
	</form>
</div>
<?php
} else {
?>
            <!-- Statut //////////////////////////////////////////////////////// -->				
        <table class="status"><tr>
            <td>
                <span id="statusResponse"></span>
                <select name="status" id="status" style="width:200px;" onchange="setStatus(this)">
                    <option value="0">Absent</option>
                    <option value="1">Occup&eacute;</option>
                    <option value="2" selected>En ligne</option>
                </select>
            </td>
        </tr></table>
<?php } ?>
<input type="hidden" id="dateConnexion" value="<?php echo $_SESSION['time']; ?>" />
        <table class="chat"><tr>		
            <!-- zone des messages -->
            <td valign="top" id="text-td">
                        <div id="annonce"></div>
                <div id="text">
                    <div id="loading">
                        <center>
                        <span class="info" id="info">Chargement du chat en cours...</span><br />
                        <img src="ajax-loader.gif" alt="patientez...">
                        </center>
                    </div>
                </div>
            </td>
                    
            <!-- colonne avec les membres connectés au chat -->
            <td valign="top" id="users-td"><div id="users">Chargement</div></td>
        </tr></table>
        <a name="post"></a>
	<table class="post_message"><tr>
		<td>
		<form action="" method="" onsubmit="envoyer(); return false;">
			<input type="text" id="message" maxlength="255" />
			<input type="button" onclick="envoyer()" value="Envoyer" id="post" />
		</form>
                <div id="responsePost" style="display:none"></div>
		</td>
	</tr></table>
</div>
<?php
/* On crée la variable login qui prend la valeur POST envoyée
car on va l'utiliser plusieurs fois */
$login = $_POST['login'];
$pass = $_POST['pass'];
			
// On crée une requête pour rechercher un compte ayant pour nom $login
$query = $db->prepare("SELECT * FROM chat_accounts WHERE account_login = :login");
$query->execute(array(
	'login' => $login
));
// On compte le nombre d'entrées
$count=$query->rowCount();
			
// Si ce nombre est nul, alors on crée le compte, sinon on le connecte simplement
if($count == 0) {			
	// Création du compte
	$insert = $db->prepare('
		INSERT INTO chat_accounts (account_id, account_login, account_pass) 
		VALUES(:id, :login, :pass)
	');
	$insert->execute(array(
		'id' => '',
		'login' => htmlspecialchars($login),
		'pass' => $pass
	));
				
	/* Création d'une session id ayant pour valeur le dernier ID créé
	par la dernière requête SQL effectuée */
	$_SESSION['id'] = $db->lastInsertId();
	// On crée une session time qui prend la valeur de la date de connexion
	$_SESSION['time'] = time();
	$_SESSION['login'] = $login;
} else {
	$data = $query->fetch();	
				
	if($data['account_pass'] == md5($pass)) {			
		$_SESSION['id'] = $data['account_id'];
		// On crée une session time qui prend la valeur de la date de connexion
		$_SESSION['time'] = time();
		$_SESSION['login'] = $data['account_login'];
	}
}
			
// On termine la requête
$query->closeCursor();
?>

</body>

</html