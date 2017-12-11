
<html>
     <div id="page">
<?php 

$page_title = 'View Users';
include ('session.php');
include ('header.php');

// Page header:
echo '<h1>Registered Users</h1>';

require_once ('dbconnection.php'); // Connect to the db.
		
// Make the query:
$q = "SELECT CONCAT(first_name, ', ', last_name) AS name FROM Customers";	
	
$r = @mysqli_query ($conn, $q); // Run the query.

//Count the number of returned rows:
$num = mysqli_num_rows($r);

if ($num > 0) { // If it ran OK, display the records.

	// Print how many users there are:
	echo "<p>There are currently $num registered users.</p>\n";

	// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="60%">
	<tr><td align="left"><b>Name:</b></td>
';
	
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr><td align="left">' . $row['name'] . '</td><td align="left">' . $row['dr'] . '</td></tr>
		';
	}

	echo '</table>'; // Close the table.
	
	mysqli_free_result ($r); // Free up the resources.	

} else { // If no records were returned.

	echo '<p class="error">There are currently no registered users.</p>';

}

mysqli_close($conn); // Close the database connection.


?>
    </div>
</html>