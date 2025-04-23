<?php
include ("C:/xampp/htdocs/carapp2/db_scripts/dbConfig.php");

echo "You asked for it. This action cannot be undone, so we're trusting you, fellow admin.\n";

// Check connection
if (!$mysqli) {
    die("Could not connect: ".$mysqli->error."<br>");
}

// Drop Inventory Table
$dropInventoryTable = "DROP TABLE IF EXISTS inventory";

// Drop Images Table
$dropImagesTable = "DROP TABLE IF EXISTS images";

// Execute the queries
if (mysqli_query($mysqli, $dropInventoryTable)) {
    echo "Inventory table dropped successfully.<br>";
} else {
    echo "Error dropping inventory table: " . mysqli_error($mysqli) . "<br>";
}

if (mysqli_query($mysqli, $dropImagesTable)) {
    echo "Images table dropped successfully.<br>";
} else {
    echo "Error dropping images table: " . mysqli_error($mysqli) . "<br>";
}

mysqli_close($mysqli);
?>
<html>
<a href="https://jtowne.great-site.net/carapp2/">Home</a>
</html>