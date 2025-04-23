<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to the Joy of PHP</title>
<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 1px;
	background-color: #C0C0C0;
}
 header nav {
    padding: 10px;
    max-width: 1220px;
    margin: 0 auto;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 15px;
    }

nav ul li a {
    color: #1C1C1C; 
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ffecd5; 
}
</style>
</head>
<header>
    <nav class="horizontalnavigation">
            <ul>
                <li><a href="https://jtowne.great-site.net/index.php">Home</a></li> 
                <li><a href="https://jtowne.great-site.net/introduction.php">Introduction</a></li> 
                <li><a href="https://jtowne.great-site.net/contract.php">Course Contract</a></li> 
                <li><a href="https://jtowne.great-site.net/names.php">Names</a></li>
                <li><a href="https://jtowne.great-site.net/joy/">Joy of PHP</a></li>
                <li><a href="/joy/samsusedcars.html">Sam's Used Cars</a></li>
            </ul>
    </nav>
</header>
<body background="bg.jpg">

<p><img alt="The Joy of PHP" height="87" src="joy_logo.jpg" width="809" /></p>
<h2>Introduction</h2>
<p>The Joy of PHP book walks you through creating a website for <strong>
<a href="samsusedcars.html">Sam's Used Cars</a></strong>.&nbsp; 
All the sample code in the book is conveniently created here.&nbsp; To get 
started, you'll need to make sure that you have PHP and mySQL running on your 
machine.&nbsp; Here are the links to get started.&nbsp; </p>
<h2>Getting Started</h2>
<table style="width: 100%" class="auto-style1">
	<tr>
		<td style="width: 377px"><strong>Prerequisites</strong></td>
		<td><strong>Free Code Editors</strong></td>
	</tr>
	<tr>
		<td style="width: 377px">
		<p>PC Users: <a href="http://www.wampserver.com/en/">Download WAMP</a></p>
		<p>Mac Users:
		<a href="http://www.apachefriends.org/en/xampp-macosx.html">Download 
		XAMP</a></p>
		<p>&nbsp;</p>
		</td>
		<td>
		<p STYLE="margin-bottom: 0in"><a HREF="http://www.pnotepad.org/">
		Programmer's Notepad</a> is a good all purpose editor</p>
		<p STYLE="margin-bottom: 0in"><a HREF="http://devphp.sourceforge.net/">
		Dev-PHP</a> is a PHP-specific editor</p>
		<p STYLE="margin-bottom: 0in">
		<a HREF="http://www.barebones.com/products/textwrangler/">TextWrangler</a> 
		is a good editor for the Mac.</p>
		</td>
	</tr>
</table>
<h2>Following along with the lessons</h2>
<p>Is PHP Running on my machine?  What version?  What extensions? &nbsp; Check it here -->
<a href="phpinfo.php" target="_blank">PHP Info Paget</a></p>
<p>A really simple PHP page --&gt; <a href="simple.php">simple.php</a></p>
<a href="db_scripts/setupDatabase.php">Setup cars database</a>
<h2>Database Related Scripts DELETE THESE WHEN READY</h2>
<p><a href="CreateDB.php">Create the Cars Database</a> (Before you can use this, 
you'll need to edit line 8 with your username and password)</p>

<p><a href="ModifyDB.php">Modify the Inventory Table</a> (This script adds the
<strong>Primary_Image</strong> column.&nbsp; Again, edit line 8 with your 
username and password)</p>
<p><a href="CreateImagesTable.php">Create the Images Table</a> (Again, edit line 
8 with your username and password)</p>
<p><img alt="Joy of PHP" height="313" src="smallcover.jpg" width="196" /></p>

</body>

</html>
