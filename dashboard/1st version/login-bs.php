<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Focco Câmbio - Dashboard">
    <meta name="author" content="Pam Gaiguer / Thompson Mota">
    <title>Focco Câmbio - Dashboard</title>
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/sb-admin.css" rel="stylesheet">
    <link  href="styles/main.css" rel="stylesheet">
    <link href="styles/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Focco Câmbio - Dashboard</a>
        </div>
    </nav>

    <div id="login-wrapper">
        <div class="container">
            <div class="col-md-offset-3 col-lg-6 col-md-offset-3">

                <div class="spacing"></div>
                <div class="spacing"></div>

                <img src="images/logo_topo.png" alt="logotipo" class="center-block img-responsive">
                <p class="text-center"><em>Dashboard</em></p>

                <div class="spacing"></div>
                <div class="spacing"></div>
                <div class="spacing"></div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="text-center"><strong>Focco Dashboard</strong></h3>

                        <div class="row">
                            <div class="col-md-offset-1 col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <label for="login">Login</label>
                                    <input type="text" class="form-control" id="login" placeholder="Login">
                                </div>

                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input type="password" class="form-control" id="password" placeholder="Senha">
                                </div>
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary btn-block" value="Entrar">

                                </div>
                            </div>
                        </div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
