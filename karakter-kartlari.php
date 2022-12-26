<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Shadow Hunters</title>
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css'><link rel="stylesheet" href="/assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand mx-auto" href="index.html"><img src="assets/img/logo.png" width="150px"></a>
  </nav>
<!-- partial:index.partial.html -->
<div class="slide-container d-flex justify-content-center align-content-center flex-wrap">
 <?php 
 $string = file_get_contents("assets/data.json");
 $json_a = json_decode($string, true);
 sort($json_a["karakter-kartlari"]);
 for ($i=0;$i< count($json_a["karakter-kartlari"]);$i++)
 {
 ?> 
  <div class="wrapper">
    <div class="clash-card wizard" id="1">
      <div class="clash-card__image clash-card__image--archer">
        <img src="assets/img/<?php echo $json_a["karakter-kartlari"][$i]["image"]; ?>"/>
      </div>
      <div class="clash-card__unit-name"> <?php echo $json_a["karakter-kartlari"][$i]["baslik"]; ?> </div>
      <div class="clash-card__level clash-card__level--barbarian"><?php echo $json_a["karakter-kartlari"][$i]["uyari"]; ?></div>
      <div class="clash-card__unit-description">
      <?php echo $json_a["karakter-kartlari"][$i]["aciklama"]; ?>
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
        <div class="one-third"></div>
      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper -->
  <?php } ?>
 
  
</div> <!-- end container -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src='assets/js/slick.min.js'></script><script  src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
