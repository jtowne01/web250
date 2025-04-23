
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jazzy Tiger's Used Cars</title>
  <link rel="stylesheet" href="/carapp/styles/default.css">
  <script src="https://lint.page/kit/67ff88.js" crossorigin="anonymous"></script>
  <link rel="icon" type="favicon/png" href="images/favicon.ico">
</head>
<header>
<h1 class="header-title">Jazzy Tiger's Used Cars</h1>
  <nav>
  <ul>
    <li><a href="https://jtowne.great-site.net/index.php">Home</a></li> 
   
    <li>
    <a href="#">Jazzy Tiger's Used Cars ▾</a>
    <ul class="dropdown">    
    <li><a href="index.php">Home</a></li>
    <li><a href="/carapp/components/formEnterCar.php">Add Car</a></li>
    <li><a href="/carapp/components/ViewCarsWithStyle2.php">View Cars</a></li>
    <li><a href="/carapp/components/ViewCarsAddImage.php">Add Images</a></li>
    </ul>

    <li>
      <a href="#">Site Version ▾</a>
      <ul class="dropdown">
        <li><a href="https://jtowne01.github.io/web250/">Static Page</a></li>
        <li><a href="https://jtowne.great-site.net/index.php?i=1">Dynamic Page</a></li>
      </ul>
    </li>

    <li>
      <a href="#">External Pages ▾</a>
      <ul class="dropdown">
        <li><a href="/multipage_sites/superduper_php/">Super Duper PHP</a></li>
        <li><a href="/multipage_sites/superduper_static">Super Duper Static</a></li>
        <li><a href="joy/">Joy of PHP</a></li>
        <li><a href="/joy/samsusedcars.html">Sam's Used Cars</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<body>
  <main>
    <h2>Home</h2><br>
    <img src="images/jtlogo.png" alt=""/>
    <h3>Welcome to Jazzy Tiger's used car lot!</h3><br>
    
    <form action="/carapp/components/SubmitCar.php" method="post">
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
  <?php
//include 'C:\xampp\htdocs\carapp\components\ViewCarsWithStyle2.php';
  ?>
    <div class="navbar">
    <a href="/carapp/components/formEnterCar.php">Add Car</a>
    <a href="/carapp/components/ViewCarsWithStyle2.php">View Cars</a>
    <a id="bottomborder" href="/carapp/components/ViewCarsAddImage.php">Add Images</a>
    </div>
  </main>
<footer>
<a href='carapp/index.php'>Jazzy Tiger's Used Cars Home</a><br>
<p>Page Built by Jason Towne, &copy;2025</p>
<h5><em>These cars will get you from point A to Point B, on a good day.</em></h5>
</footer>
</body>
</html>
