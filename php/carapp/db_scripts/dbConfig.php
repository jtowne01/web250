 <?php

 // Check if running on localhost - if not assume running on InfinityFree
if ($_SERVER['HTTP_HOST'] === 'localhost')
{
    // info for localhost DB
    echo nl2br ("THIS IS LOCAL HOST\n");
    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $databaseName = 'if0_38362188_jazzytiger1';
    $ISLOCAL = 0;
} else {

    //mySQL->Deployed Host
$serverName = 'sql112.infinityfree.com';
$username = 'if0_38362188';
$password = '30vrtLokpgT';
$databaseName = 'if0_38362188_jazzytiger1';
$thing = 'thing';
$ISLOCAL = 0;
}

// Create new connection
$mysqli = new mysqli($serverName, $username, $password, $databaseName);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

echo nl2br ("Connected to server [$serverName]\n");

if ($ISLOCAL)
{
    // check if db exists
    $query = "SHOW DATABASES LIKE \"$databaseNames\"";
    echo n12br($mysqli->query($query)->num_rows . "\n");
    if ($mysqli->query($query)->num_rows > 0)
    {
        echo nl2br ("Could not find [$databaseName]\n
                    Creating [$databaseName] now...");

                    $q_create_database = "CREATE DATABASE IF NOT EXISTS $databaseName";
                    if ($mysqli->query($q_create_database) === TRUE)
                    {
                        echo "<p>Database [$databaseName] created</p>";
                    } else {
                        echo "Had trouble with this SQL: [$q_create_database]";
                        echo nl2br ("Error: $mysqli->error\n");
                    }

    }
}
// select a database to work with
if (!$mysqli->select_db($databaseName))
{
    echo n12br ("Could not connect to [$databaseName]\n)
            :(\tGoodbye...");
            exit;
}
echo nl2br ("Successfully connected to [$databaseName]\n");
?>