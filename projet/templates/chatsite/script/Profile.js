/*function affichermdp(){
    console.log();
}*/
function modifier(){
    let content = document.getElementById("Acceuil");
    content.innerHTML = "";
    modi();
}
function modi(){
    document.getElementById("Acceuil").innerHTML ='<form id = modifier action = "Modifier.php" method="POST"><label>Alias:</label><input type="text" name="NewAlias" placeholder=" Alias" ></br><label>Nom:</label><input type="text" name="Newname" placeholder="nom"></br><label>Prenom:</label><input type="text" name="NewPrenom" placeholder="Prenom"></br><label>mdp:</label><input type="Password" name="Newpass" placeholder="Nouveau mot de passe"></br><label>email:</label><input type="mail" name="Newmail" placeholder="mail"></br></br><input type="submit" value ="Modifier" name = "submit"/>';}