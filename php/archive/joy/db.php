 <?php
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // local environment
    $mysqli = new mysqli("localhost", "root", "", "if0_38362188_cars");
} else {
    // hosted environment
    $mysqli = new mysqli("sqlXXX.infinityfree.com", "your_hosted_username", "your_hosted_password", "your_hosted_dbname");
}

// check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>