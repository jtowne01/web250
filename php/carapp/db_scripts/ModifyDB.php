<?php
/**
 * Joy of PHP sample code
 * Demonstrates how to modify an existing database table.
 */
include 'C:\xampp\htdocs\carapp\db_scripts\db.php';

   if (!$mysqli) { 
      die("Could not connect: ".$mysqli->error."<br>"); 
  } 
  echo 'Connected successfully to mySQL. <BR>'; 
  
//select a database to work with
$mysqli->select_db("if0_38362188_jazzytiger1");
   Echo ("Selected the cars database<br>");

$query = "ALTER TABLE `inventory` ADD `Primary_Image` VARCHAR(250) NULL AFTER `SALE_DATE`";
echo "<p>***********</p>";
echo $query ;
echo "<p>***********</p>";
if ($mysqli->query($query) === TRUE) 
{
    echo "Database table 'INVENTORY' modified</P>";
}
else
{
    echo "<p>Error: </p>" . $mysqli->error."<br>";;
}
$mysqli->close();
echo "<br><br><a href='index.html'>Home</a>";
?>