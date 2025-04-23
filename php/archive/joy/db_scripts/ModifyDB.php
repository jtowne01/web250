<?php
/**
 * Joy of PHP sample code
 * Demonstrates how to modify an existing database table.
 */
include 'db.php';

   if (!$mysqli) { 
      die("Could not connect: ".$mysqli->error."<br>"); 
  } 
  echo 'Connected successfully to mySQL. <BR>'; 
  
//select a database to work with
$mysqli->select_db("if0_38362188_cars");
   Echo ("Selected the cars database<br>");

   $query = "ALTER TABLE `inventory` ADD `Primary_Image` VARCHAR(250) NULL AFTER `SALE_DATE`";
   if ($mysqli->query($query) === TRUE) {
       echo "<p>Database table 'INVENTORY' modified (Primary_Image column added).</p>";
   } else {
       if (strpos($mysqli->error, "Duplicate column") !== false) {
           echo "<p>'Primary_Image' column already exists.</p>";
       } else {
           echo "<p>Error modifying inventory table: </p>" . $mysqli->error;
       }
   }

echo "<p>***********</p>";
echo $query ;
echo "<p>***********</p>";
if ($mysqli->query($query) === TRUE) 
{
    echo "Database table 'inventory' modified</P>";
}
else
{
    echo "<p>Error: </p>" . $mysqli->error."<br>";;
}

$mysqli->close();
echo "<br><br><a href='index.html'>Home</a>";
?>