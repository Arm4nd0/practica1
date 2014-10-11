<?php
    //require('header.php');
    require('Valida.php');
    require ('bd.php');
    $Sesion = new Sesion();
    if(isset($_POST['submit']))
    {
        switch($_POST['submit'])
        {
            case "Ingresar":
                $Sesion->SesionUser("$_POST[user]","$_POST[pas]");
                break;
        }
    }
?>
<!-- Jumbotron -->
<div class="jumbotron">
    <h1>Bienvenido</h1>
    <!--<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>-->
    <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
</div>
<!-- Example row of columns -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Justified Nav Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="justified-nav.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <center>
                <section id="content">
                    <form method="POST" name="contact" action="index.php">
                        <h1>Iniciar Sesión</h1>
                        <div>
                            <input type="text" placeholder="Usuario" required="" id="username" name="user"/>
                        </div>
                        <div>
                            <input type="password" placeholder="Contraseña" required="" id="password" id="pas" name="pas"/>
                        </div>
                        <div>
                            <input type="submit" value="Ingresar" name="submit" id="submit" />
                        </div>
                    </form>
                </section>
                <!--<br><br><br><div><center><font size='13' color='red'><?php $msg=$_GET['msg']; echo"$msg";?></font></center></div>-->
            </center>
        </div><!-- container -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>