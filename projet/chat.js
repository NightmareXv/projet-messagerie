function envoyer(){
    var send = document.getElementById("SendChat");
    send.onclick = sauver()
}

function sauver(){
    var text = document.getElementById("");
    var usern = document.getElementById("");

    if (text != undefined ){
        var url = "envoi.php?usern" + decodeURI(usern)+ "&text= "+ decodeURI(text);
        $.post(url);
    }
}