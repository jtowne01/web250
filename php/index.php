<?php
$allowed_pages = ['index', 'introduction', 'contract', 'names', 'introform', 'fizzbuzz']; 
$page = isset($_GET["p"]) ? $_GET["p"] : "index";
$page_title = "Jason Towne's Jazzy Tiger | WEB250 | " . ($page === 'index' ? 'Home' : ucfirst($page));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="stylesheet" href="styles/default.css">
  <script src="https://lint.page/kit/67ff88.js" crossorigin="anonymous"></script>
  <link rel="icon" type="favicon/png" href="images/favicon.ico">
</head>
<body>
<header>
  <h1 class="header-title">Jason Towne's Jazzy Tiger | WEB250</h1>
  <nav>
  <ul>
    <li><a href="?p=index">Home</a></li> 

    <li>
    <a href="#">Assignments ▾</a>
    <ul class="dropdown">
    <li><a href="?p=introduction">Introduction</a></li> 
    <li><a href="?p=contract">Contract</a></li> 
    <li><a href="?p=names">Names</a></li>
    <li><a href="?p=fizzbuzz">FizzBuzz</a></li>
    <li><a href="businesscard.php">Business Card</a></li>
    </ul>
    </li>

    <li>
    <a href="#">Jazzy Tiger's Used Cars ▾</a>
    <ul class="dropdown">    
    <li><a href="/carapp/?=index">Carapp 1</a></li>
    <li><a href="/carapp2/components/?=index">Carapp 2</a></li>
    </ul>
    </li>

    <li>
      <a href="#">Site Version ▾</a>
      <ul class="dropdown">
        <li><a href="https://jtowne01.github.io/web250/">Static Page</a></li>
        <li><a href="https://jtowne.great-site.net/">Dynamic Page</a></li>
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

<main>
  <?php
  if ($page === "index") {
      echo "<h2>Home</h2><p>I am a 21 year old programmer from Charlotte, NC. I do not have a professional background in programming yet, however, I plan on changing that in the near future.</p>     
    <p>Here, you can navigate to my Introduction, Contract, and Brand page. To learn more about me, feel free to navigate over to my <a href='?p=introduction'>Introduction</a></p>
    <p>Over these next few months, my website will increasingly be more occupied as I publish assignments or projects.</p>
    <p>Good luck to you all, and I hope everyone has a great semester. Thank you for visiting my site!</p>";
  } elseif (in_array($page, $allowed_pages) && file_exists("$page.php")) {
    include("$page.php");
} else {
    include("404.php");
}
  ?>
</main>

<footer>
   <nav>
    <a href="https://github.com/jtowne01" target="_blank">GitHub</a> |
    <a href="https://jtowne01.github.io/" target="_blank">GitHub.io</a> |
    <a href="https://jtowne01.github.io/web250/" target="_blank">WEB250.io</a> |
    <a href="https://www.freecodecamp.org/jtowne01" target="_blank">freeCodeCamp</a> |
    <a href="https://www.codecademy.com/profiles/jtowne01" target="_blank">Codecademy</a> |
    <a href="https://jsfiddle.net/u/jtowne01" target="_blank">JSFiddle</a> |
    <a href="https://www.linkedin.com/in/jason-towne-69471a251/" target="_blank">LinkedIn</a>
    </nav>
    <p>Page Built by Jason Towne, &copy;2025 | Certified in <a id= "certification" href="https://www.freecodecamp.org/certification/jtowne01/responsive-web-design" target="_blank">Responsive Web Design</a></p>
</footer>
</body>
</html>
