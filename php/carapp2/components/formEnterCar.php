<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Jazzy Tiger's Used Cars | Add Car</title>
<link rel="stylesheet" href="/carapp/styles/default.css">
</head>

<body>
    <main>
    <a href="/carapp/index.php">Back</a><br>
<h1>Jazzy Tiger's Used Cars</h1>
<form action="/carapp/components/SubmitCar.php" method="post">
	VIN: <input name="VIN" type="text" /><br />
	<br />
	Make: <input name="Make" type="text" /><br />
	<br />
	Model: <input name="Model" type="text" /><br />
	<br />
	Price: <input name="Asking_Price" type="text" /><br />
	<br />
	<input name="Submit1" type="submit" value="submit" /><br />
	&nbsp;</form>
</main>
</body>

</html>
