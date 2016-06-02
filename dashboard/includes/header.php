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
    <link href="styles/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
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
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li><a href="#">Alert Name <span class="label label-default">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-success">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-info">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuário <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-gear"></i> Configurações</a></li>
                        <li class="divider"></li>
                        <li><a href="../login.php""><i class="fa fa-fw fa-power-off"></i> Logoff</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
                    <li><a href=""><i class="fa fa-fw fa-edit"></i> Forms</a></li>
                    <li><a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a></li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">