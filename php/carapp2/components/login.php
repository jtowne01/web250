<?php
if(isset($_POST["login"])){
    $user_name = $_POST["user"];
    $passwrd = $_POST["pass"];
    if ($user_name == "admin" && $passwrd == "admin") {
      header("Location: viewinventory.php");
      exit;
  } elseif ($user_name == "web250teacher" && $passwrd == "DapperViper666") {
      header("Location: viewinventory.php");
      exit;
  } else {
      echo "<script>alert('Login Failed');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jazzy Tiger's Used Cars | Login</title>
  <link rel="stylesheet" href="/carapp2/styles/default.css">
  <script src="https://lint.page/kit/67ff88.js" crossorigin="anonymous"></script>
  <link rel="icon" type="favicon/png" href="images/favicon.ico">
</head>
<body>
<?php
include 'C:\xampp\htdocs\carapp2\components\header.php';
  ?>
    <main>
     <h2>Login</h2>   
    <form method="post">
    <table>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="user" placeholder="Username" required></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="pass" required></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="login" value="Submit"></td>
    </tr>
    </table>
</form> 
</main>
<?php
include 'C:\xampp\htdocs\carapp2\components\footer.php';
  ?>
</body>
</html>