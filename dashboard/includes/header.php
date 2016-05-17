<?php 

  session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <title>Focco dashboard</title>
  <meta charset="UTF-8">
  <link rel='shortcut icon' type='image/x-icon' href='/favicon.png' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>
<body style="font-family: Ubuntu;">

    <link rel="stylesheet" href="/css/bootstrap.min.css" />        
    <!--<link rel="stylesheet" href="/styles/main.css">-->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/dashboard/styles/font-awesome.min.css">

    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"> </script>    
    <script type="text/javascript" src="/js/jquery.mask.min.js"> </script>    
    <script type="text/javascript" src="/js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="/dashboard/scripts/main.js"> </script>
   


<nav class="navbar navbar-default">
  <div class="container-fluid black-bg">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>            
    </div>


  

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">   

      <?php if ($_SESSION['currentUser'] != null) { ?>
        <!--TIPO 1 = ADMIN-->
        <?php if ($_SESSION['currentUser']['tipo'] != 3) { ?>
            <li><a href="/dashboard/usuarios">Usuários</a></li>        
        <?php } ?>

        <li><a href="/dashboard/logout" >Logout</a></li>

      <?php } ?>

      </ul>      


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">


