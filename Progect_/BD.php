<?php
if (isset($_POST['submitted'])) {
$errors = array();
require_once ('e_msql_connect.php');


if (!empty($_POST['Model'])){
$Model= $_POST['Model'];
}else {
$errors[] = '<font color="red">Please provide the name of the Model</font>';
}

if (!empty($_POST['Engine'])){

$Engine= $_POST['Engine'];
}else {
$errors[] = '<font color="red">Please provide Engine.</font>';
}


if (!empty($_POST['Color'])){

$Color = $_POST['Color'];
}else {
$errors[] = '<font color="red">Please provide Color.</font>';
}

if (!empty($_POST['Brand'])){

$Brand = $_POST['Brand'];
}else {
$errors[] = '<font color="red">Please provide Brand.</font>';
}

if (!empty($_POST['Fuel'])){

$Fuel = $_POST['Fuel'];
}else {
$errors[] = '<font color="red">Please provide Fuel.</font>';
}




if (empty($errors)) {
$query ="INSERT INTO bd (Model,Engine,Color,Brand,Fuel) VALUES ('$Model','$Engine','$Color','$Brand','$Fuel')";
$result = @mysql_query($query);
if (mysql_affected_rows() == 1) {
echo '<font color="red">Your assigment has been added.</font>';
} else {
echo '<font color="red">There was error while adding your assigment.</font>';
}

} else {
echo '<font color="red"><h3>Error!</h3>
The following error(s) occured:<br /></font>';
foreach ($errors as $msg) {
echo " - <font color=\"red\">$msg</font><br />\n";
}
}
}
?>

<html>

<head>

<title>Cars</title>

</head>


<div class="boxl" style="width:420px;">
<h3>Add your car:</h3>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<p>Model: <input type="text" name="Model" size="36" maxlength="30" /> </p>
<p>Engine: <input type="text" name="Engine" size="35" maxlength="36" /> </p>
<p>Color: <input type="text" name="Color" size="36" maxlength="300" /> </p>
<p>Brand:<input type="text" name="Brand" size="36" maxlength="300" /> </p>
<p>Fuel: <input type="text" name="Fuel" size="36" maxlength="300" /> </p>

<p><input type="submit" name="submit" value="Confirm" /></p>
<input type="hidden" name="submitted" value="TRUE" />

<body  style="background-color:yellow">
	<a href="index.html">Go back to main menu.</a>
</body>


</form>
</div>

</html>

