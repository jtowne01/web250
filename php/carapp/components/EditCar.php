<html>
<head>
<title>Car Saved</title>
<link rel="stylesheet" href="/carapp/styles/default.css">
</head>
<body bgcolor="#FFFFFF" text="#000000" >
<main>
<?php
// Capture the values posted to this php program from the text fields in the form

$VIN = $_REQUEST['VIN'] ;
$Make = $_REQUEST['Make'] ;
$Model = $_REQUEST['Model'] ;
$Price = $_REQUEST['Asking_Price'] ;

//Build a SQL Query using the values from above

$query = "UPDATE inventory SET 

VIN='$VIN', 
Make='$Make', 
Model='$Model', 
ASKING_PRICE='$Price'

WHERE

VIN='$VIN'"; 

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'C:\xampp\htdocs\carapp\db_scripts\dbConfig.php';
/* check connection */
if (mysqli_connect_errno()) {
 echo ("Connection failed: ". $mysqli->error."<br>");
 exit();
}

 echo 'Connected successfully to mySQL. <BR>';

//select a database to work with
$mysqli->select_db("if0_38362188_jazzytiger1");
 Echo ("Selected the jazzytiger1 database. <br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
 echo "<p>You have successfully entered $Make $Model into the database.</P>";
}
else
{
 echo "Error entering $VIN into database: " . mysql_error()."<br>";
}
$mysqli->close();
?>
<p><a href="ViewCarsWithStyle2.php">View Cars with Edit Links</a></p>
</main>
</body>
</html>