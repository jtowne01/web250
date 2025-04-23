<html>
<head>
<title>Jazzy Tiger's Used Cars</title>
<link rel="stylesheet" href="/carapp/styles/default.css">
</head>

<body>
<main>
<h1>Jazzy Tiger's Used Cars</h1>
<?php 
include 'C:\xampp\htdocs\carapp\db_scripts\dbConfig.php';
$vin = $_GET['VIN'];
$query = "DELETE FROM inventory WHERE VIN='$vin'";
echo "$query <BR>";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   Echo "The vehicle with VIN $vin has been deleted.";
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}

$mysqli->close();
   
?>

<br><p><a href="ViewCarsWithStyle2.php">View Cars with Edit Links</a></p>
</main>
</body>
</html>
