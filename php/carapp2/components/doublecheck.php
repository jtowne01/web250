<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jazzy Tiger's Used Cars | Login</title>
  <link rel="stylesheet" href="/carapp2/styles/default.css">
  <script src="https://lint.page/kit/67ff88.js" crossorigin="anonymous"></script>
  <link rel="icon" type="favicon/png" href="images/favicon.ico">
</head>
<body>
<?php
include 'C:\xampp\htdocs\carapp2\components\header.php';
  ?>
    <main>
     <h2>Are you sure you want to wipe the database?</h2>   
     <div class="navbar">
    <a href="/carapp2/db_scripts/wipeDatabase.php">Yes, I want to wipe the database.</a><br>
    <a href="/carapp2/components/viewinventory.php">No, take me back.</a><br>
    </div>
</main>
<?php
include 'C:\xampp\htdocs\carapp2\components\footer.php';
  ?>
</body>
</html>