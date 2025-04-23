
<html>
<head>
    <title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" >

<?php 
// Capture the values posted to this php program from the text fields

$VIN =  trim( $_REQUEST['VIN']) ;
$Make = trim( $_REQUEST['Make']) ;
$Model = trim( $_REQUEST['Model']) ;
$Price =  $_REQUEST['Asking_Price'] ;


//Build a SQL Query using the values from above

$query = "INSERT INTO inventory
  (`VIN`, Make, Model, ASKING_PRICE)
   VALUES (
   '$VIN', 
   '$Make', 
   '$Model',
    $Price
    )";

// Print the query to the browser so you can see it
echo ("INSERT INTO inventory (`VIN`, `YEAR`, `Make`, `Model`, `TRIM`, `EXT_COLOR`, `INT_COLOR`, `ASKING_PRICE`, `SALE_PRICE`, `PURCHASE_PRICE`, `MILEAGE`, `TRANSMISSION`, `PURCHASE_DATE`, `SALE_DATE`) VALUES ('eeeeee', '', 'eeeee', NULL, NULL, NULL, NULL, '123456', NULL, NULL, NULL, NULL, NULL, NULL) <br>");
echo ($query. "<br>");

include 'db_scripts/dbConfig.php';

  echo 'Connected successfully to mySQL. <br>'; 
  
//select a database to work with
/*$mysqli->select_db("if0_38362188_cars");
   Echo ("Selected the cars database. <br>");
*/
/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
    echo "<p>You have successfully entered $Make $Model into the database.</P>";
}
else
{
    echo "Error entering $VIN into database: " . $mysqli->error."<br>";
}
$mysqli->close();
include 'footer.php'
?>
</body>
</html>