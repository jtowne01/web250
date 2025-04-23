 <?php
if ($_SERVER['HTTP_HOST'] === 'localhost')
{
    // info for localhost DB
    echo nl2br ("THIS IS LOCAL HOST\n");
    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $databaseName = 'if0_38362188_cars';
$ISLOCAL = 0;
} else {

    //mySQL->Deployed Host
$serverName = 'sql112.infinityfree.com';
$username = 'if0_38362188';
$password = '30vrtLokpgT';
$databaseName = 'if0_38362188_cars';
$thing = 'thing';
$ISLOCAL = 0;
}

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