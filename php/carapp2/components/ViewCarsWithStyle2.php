<div id="container">
<style>
/* The grid is used to format a table instead of a grid control on the list of Notes */
#Grid
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:80%;
border-collapse:collapse;
margin-left: auto;
margin-right: auto;
margin-top: 10px;
}
#Grid td, #Grid th 
{
font-size: 1em;
border: 1px solid black;
padding:3px 7px 2px 7px;
}
#Grid th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
color: #363636;
background-color: #FAD5A5;
}
#container {
    margin: 30px auto; 
    padding: 20px 50px;
    background-color: #ffb672;
    color: #ecf0f1;
    overflow-y: auto; 
    max-width: 1300px;
    max-height: 500px;
    border: 4px solid #7d2911;
    border-radius: 8px;
    box-sizing: border-box;
    margin-top: -20px;
}

#container table {
    width: 100%;
    border-collapse: collapse;
}

#container table td, 
#container table th {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}


.odd td 
{
color:#000000;
background-color: #fd8d3a;
}

.even  
{
color:#000000;
background-color: #ffb672;
}
#Grid head 
{
color: #000000;
background-color: #7d2911;
}
main a
{
text-decoration: underline;
}
</style>
 <?php
include 'C:/xampp/htdocs/carapp2/db_scripts/dbConfig.php';
$query = "SELECT * FROM inventory ORDER BY Make";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
}
else
{
    echo "Error getting cars from the database: " . mysql_error()."<br>";
}

echo "<table id='Grid' style='width: 80%'>\n";
echo "<tr>";
echo "<th style='width: 50px'>Make</th>";
echo "<th style='width: 50px'>Model</th>";
echo "<th style='width: 50px'>Asking Price</th>";
echo "<th style='width: 50px'>Action</th>";
echo "</tr>\n";

$class ="odd"; 

while ($result_ar = mysqli_fetch_assoc($result)) {
    echo "<tr class=\"$class\">";
    echo "<td><a href='viewcar.php?VIN=".$result_ar['VIN']."'>" . $result_ar['Make'] . "</a></td>";
    echo "<td>" . $result_ar['Model'] . "</td>";
       echo "<td>" . $result_ar['ASKING_PRICE'] . "</td>";
        echo "<td><a href='FormEdit.php?VIN=".$result_ar['VIN']."'>Edit</a><br>  <a href='deletecar.php?VIN=".$result_ar['VIN']."'>Delete</a> <br><a href='AddImage.php?VIN=".$result_ar['VIN']."'>Add Image</a></td>";
   echo "</tr>\n";
   
    if ($class=="odd"){
        $class="even";
    }
    else
    {
        $class="odd";
    }
}
echo "</table>";
$mysqli->close();
?>
</div>