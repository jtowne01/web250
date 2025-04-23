<?php
echo <<<HTML
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
      </li>
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
HTML;
?>
