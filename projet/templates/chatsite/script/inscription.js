function authentif(){
    let r = document.getElementById("Acceuil");
    r.innerHTML = "";
    rempli();
}
function rempli(){
    document.getElementById("Acceuil").innerHTML ='<h2>Intra-Uni</h2></br><h3> Connexion </h3></br><div id = "message"> Bienvenu dans Intra-uni </div></br><form id = "inscription" action="Scriptphp/seconnecter.php" method="POST" ><label for ="Alias">Saisir pseudo :             </label><input type="text" name="Alias" require/><br></br><label for ="Mdp">saisir votre mot de passe :       </label><input type="text" name="mdp" require/><br></br><span  onclick = "return inscription()" style="cursor:pointer" class = "txt1">Vous êtes nouveau avec nous ?</span><br /><br /><br /><input type="submit" value="S inscrire"  name = "submit"/></form>';
}