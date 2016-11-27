<?php 

if ((isset($_SESSION['currentUser'])) && $_SESSION['currentUser'] != null)  Header("Location: /dashboard/home");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="/dashboard/styles/materialize.css" />
</head>

<body class="loginForm">
  <header>
  </header>