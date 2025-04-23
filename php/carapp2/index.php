
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
    <h2>Home</h2><br>
    <img src="images/jtlogo.png" alt=""/>
    <h3>Welcome to Jazzy Tiger's Used Cars!</h3><br>
    <div class="navbar">
    <a href="/carapp2/components/login.php">Login</a><br>
    </div>
    <?php
include 'C:\xampp\htdocs\carapp2\components\ViewCarsWithStyle.php';
  ?>
    <form action="/carapp2/components/SubmitCar.php" method="post">
    <fieldset>
    <h4>Add a car:</h4>
	  VIN: <input name="VIN" type="text" />
	 
	  Make: <input name="Make" type="text" />

	  Model: <input name="Model" type="text" />

	  Price: <input name="Asking_Price" type="text" />
<br><br>
  <input name="Submit1" type="submit" value="Submit" />
  </fieldset>
	&nbsp;</form>
  </main>
  <?php
include 'C:\xampp\htdocs\carapp2\components\footer.php';
  ?>
</body>
</html>
