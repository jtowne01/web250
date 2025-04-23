<style>

  @keyframes slide_animation{
      0% {left:0px;}
      10% {left:0px;}
      20% {left:120px;}
      30% {left:120px;}
      40% {left: 240px;}
      50% {left: 240px;}
      60% {left: 120px;}
      70% {left: 120px;}
      80% {left: 0px;}
      90% {left: 0px;}
      100% {left:0px;}
  }
 
  @-webkit-keyframes slide_animation{
      0% {left:0px;}
      10% {left:0px;}
      20% {left:120px;}
      30% {left:120px;}
      40% {left: 240px;}
      50% {left: 240px;}
      60% {left: 120px;}
      70% {left: 120px;}
      80% {left: 0px;}
      90% {left: 0px;}
      100% {left:0px;}
  }
 
  .slide-images{
      margin: 0 auto;
      position: relative;
      -webkit-animation-name: slide_animation;
      animation-name: slide_animation;
      -webkit-animation-duration: 33s;
      animation-duration: 33s;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-direction: alternate;
      animation-direction: alternate;
      -webkit-animation-play-state: running;
      animation-play-state: running;
  }
 
  .img-container{
      height: 800px;
      width: 1200px;
      position: relative;
      float: left;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jazzy Tiger's Used Cars</title>
  <link rel="stylesheet" href="/carapp2/styles/default.css">
  <script src="https://lint.page/kit/67ff88.js" crossorigin="anonymous"></script>
  <link rel="icon" type="favicon/png" href="images/favicon.ico">
</head>
<body>
<?php
include 'C:\xampp\htdocs\carapp2\components\header.php';
  ?>
  <main>
    <h2>Best Deals</h2><br>
        <div class="slider-frame">
            <div class="slide-images">
                    <div class="img-container">
                        <img src="uploads/karmann.png" alt="Karmann Ghia | $12,500">
                    </div>
                    <div class="img-container">
                        <img src="uploads/focus.jpg" alt="Ford Focus | $12,500">
                    </div>
                    <div class="img-container">
                        <img src="uploads/civic.jpg" alt="Honda Civic | $12,500">
                    </div>
            </div>
        </div>
        </main>
        <?php
include 'C:\xampp\htdocs\carapp2\components\footer.php';
  ?>
</body>
</html>
