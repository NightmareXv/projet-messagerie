<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="template.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading top-bar">
                        <div class="col-md-8 col-xs-8">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span> Contacts</h3>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Masha</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Vasya</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Inna</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="chatbody">
                    <div class="panel panel-primary">
                        <div class="panel-heading top-bar">
                            <div class="col-md-8 col-xs-8">
                                <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Miguel</h3>
                            </div>
                        </div>
                        <div class="panel-body msg_container_base" id="list-messages">
                            
                            
                        </div>
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                                <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm" id="btn-chat"><i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>  
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src ="template.js"></script>

</body>
</html>

