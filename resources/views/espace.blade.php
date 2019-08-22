<!DOCTYPE html>
    <html>
        <head>
            <title>Connexion</title>
            <meta charset="utf-8"/>
            <meta name="vewport" content="width-device-width, initial-scale=1">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
            <link href="http://fonts.google.com/css7?family=Lato" rel="stylesheet" type="text/css">
            <link  href="{{asset('css/ap.css')}}" rel="stylesheet">
        </head>
        <body class="image">
            <div class="container">
                <div class="divider"> </div>
                <div class="heading">
                    <h2>Connexion</h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-3"> 
                        <form id="contact-form" method="" action="" role="form">
                             <div class="row">
                                <div class="col-md-6">
                                    <label for="email">Nom d'utilisateur</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="phone">Mot de passe</label>
                                    <input type="text" id="password" name="password" class="form-control" placeholder="Votre mot de passe" value="">
                                </div>
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me">  Souviens-toi de moi
                                    </label>
                                </div>                                                              
                                <div class="col-md-12">
                                    <input type="submit" class="button1" value="Envoyer">
                                </div>
                            </div>
                        </form> 
                    </div>        
                </div>
            </div>            
        </body>
    </html>


