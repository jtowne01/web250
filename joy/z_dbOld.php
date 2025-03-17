 <?php
//mySQL->localhost
$serverName = 'sql112.infinityfree.com';
$username = 'if0_38362188';
$password = '30vrtLokpgT';
$databaseName = 'if0_38362188_cars';

$mysqli = new mysqli($serverName, $username, $password, $databaseName);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    printf("Connected to database successfully.\n");
//select a database to work with
$mysqli->select_db("if0_38362188_cars");
     printf("Successfully selected cars database.\n");
?>