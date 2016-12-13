
<?php
	// 1. Create a database connection
	include 'db-info.php';

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);










	// 2. Perform database query
	$query = "SELECT * FROM contactinf ";


	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Contacted Me</title>
</head>
<body>

	<h1>Contacts</h1>

	<table border>
		<tr>

<th>First Name</th>
<th>Last Name</th>
<th>Phone Number</th>
<th>EMail</th>
<th>Message</th>
</tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>

<td><?php echo $pages["FN"]; ?></td>
<td><?php echo $pages["LN"]; ?></td>
<td><?php echo $pages["PH"]; ?></td>
<td><?php echo $pages["EM"]; ?></td>
<td><?php echo $pages["TA"]; ?></td>
</tr>

<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Index</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>