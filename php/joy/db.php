 <?php
$mysqli = new mysqli('sql112.infinityfree.com', 'if0_38362188', '30vrtLokpgT', 'if0_38362188_cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("if0_38362188_cars");
 
?>