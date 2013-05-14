<?php
	require_once('e_msql_connect.php');

	$result = mysql_query("SELECT * FROM bd");

	

	echo "<table border='1' BGCOLOR=green>
	<tr>
	<th>Model</th>
	<th>Engine</th>
	<th>Color</th>
	<th>Brand</th>
	<th>Fuel</th>
	</tr>";

	while($row = mysql_fetch_array($result))
	{
 		 echo "<tr>";
 		 echo "<td>" . $row['Model'] . "</td>";
		 echo "<td>" . $row['Engine'] . "</td>";
		 echo "<td>" . $row['Color'] . "</td>";
		 echo "<td>" . $row['Brand'] . "</td>";
		 echo "<td>" . $row['Fuel'] . "</td>";
  		 echo "</tr>";
 	 }
	echo "</table>";

?> 

<html>
	<body style="background-color:black">
		<head>

			<title>Show Cars</title>
		

	<a href="index.html">Go back to main menu.</a>

		</head>
	</body>
</html>
