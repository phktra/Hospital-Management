<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Medicio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Call styles -->
  <?php
  include('layout/styleshop.php');
  ?>

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <?php include('layout/header.php'); ?>

  </header>

  <main class="main">

    <?php 
    if (isset($_GET['page'])) {
      include('page/'.$_GET['page'].'.php');
    }else {
      include('layout/master.php'); 
    }
    ?>

  </main>

  <footer id="footer" class="footer light-background">

    <?php include('layout/footer.php'); ?>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>


  
  <!-- Call Js -->
  <?php
  include('layout/jsshop.php');
  ?>

</body>

</html>