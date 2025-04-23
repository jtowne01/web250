
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
    <h2>View and Edit Cars</h2><br>
    <img src="images/jtlogo.png" alt=""/>
    <h3>Jazzy Tiger's Used Cars Inventory</h3><br>
    <?php
include 'C:\xampp\htdocs\carapp2\components\ViewCarsWithStyle2.php';
  ?>
    <div class="navbar">
    <a href="/carapp2/db_scripts/setupDatabase.php">Create Database</a>
    <a href="/carapp2/components/doublecheck.php">Wipe Database (Use carefully)</a>
    <a href="/carapp2/">Home</a>
    <a id="bottomborder" href="/carapp/">Carapp 1</a><br>
    </div>
  </main>
  <?php
include 'C:\xampp\htdocs\carapp2\components\footer.php';
  ?>
</body>
</html>
