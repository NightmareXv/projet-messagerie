document.addEventListener("DOMContentLoaded", function(e){
    
    //var _id = 6;
    var first_query = true;

    function msg_rec(Alias ,message, time){
        return  `
        <div class="row msg_container base_sent">
            <div class="col-md-10 col-xs-10">
                <div class="messages msg_sent">
                <p>${Alias}</p>    
                <p>${message}</p>
                    
                    <time datetime="${time}">${time}</time>
                </div>
            </div>
        </div> `;
    }

    function msg_sent(Alias ,message, time){
        return  `
                <div class="row msg_container base_receive">
                        <div class="col-md-10 col-xs-10">
                            <div class="messages msg_receive">
                            <p>${Alias}</p>    
                            <p>${message}</p>
                                
                                <time datetime="${time}">${time}</time>
                            </div>
                        </div>
                    </div>`;
    }
    
    function recuperation(){
        fetch('Scriptphp/recup-envoi.php')
        .then( res => res.json())
        .then(datas => {
            list.innerHTML = ''
            datas.map(data => {
                var e = document.createElement('div')

                if(data['id_client'] != 0 )
                    e.innerHTML = msg_sent(data['Alias'], data['message'],  data['date'])
                else
                    e.innerHTML = msg_rec(data['Alias'], data['message'], data['date'])
                
                list.appendChild(e)

            })
            if(first_query==true){
                list.scrollTop = list.scrollHeight;
                first_query = false
            }

        })
    }

    var list = document.getElementById('list-messages');
    recuperation() 
    setInterval(recuperation, 1000);
});  
