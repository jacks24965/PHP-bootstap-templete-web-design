<?php
$currentPage = strtolower(basename($_SERVER['PHP_SELF']));
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>JACKS.DEV | MASTER TOUFIK</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/contact.css">
<script src="script.js" defer></script>
  </head>
  <body>
  
  <!--- Menu start -------------->

<nav class="bg-menu">
<div class="container-fluid d-flex align-items-center justify-content-between position-relative">
  <a href="index.php">
    <img src="img/logo.svg" alt="JACKS.DEV - MASTER TOUFIK" class="navbar-logo">
  </a>

  <!-- Mobile Hamburger Button -->
  <button class="mobile-menu-btn" id="mobileMenuBtn" type="button" aria-label="Toggle navigation menu" aria-expanded="false">
    ☰
  </button>

  <ul class="nav justify-content-end" id="mainNavbar">
    <li class="nav-item">
      <a class="nav-link <?= ($currentPage == 'index.php' || $currentPage == '' || $currentPage == 'class-8') ? 'active' : '' ?>" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($currentPage == 'portfolio.php') ? 'active' : '' ?>" href="portfolio.php">Portfolio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="Contact.php">Contact</a>
    </li>
  </ul>

</div>
</nav>
  <!--- Menu End -------------->