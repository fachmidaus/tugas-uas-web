<?php

// This script retrieves all the records from the users table. 
// This new version links to edit and delete pages.
$page_title = 'History Pendidikan';

//include ('includes/header.html');

echo '<h1>History Pendidikan Users</h1>';

require('mysqli_connect.php');

// Define the query:
$q = "SELECT nama, sd, smp, sma, pt
FROM pendidikan
ORDER BY nama ASC
LIMIT 0 , 30";
$r = @mysqli_query ($dbc, $q);

// Count the number of returned rows:
$num = mysqli_num_rows($r);
if ($num > 0) { // If it ran OK, display the records.
// Print how many users there are:
echo "<p> There are currently $num registered users.</p>\n";
// Table header:
echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
<tr>

<td align="left"><b>Nama</b></td>
<td align="left"><b>SD/ MI</b></td>
<td align="left"><b>SMP/ MTS</b></td>
<td align="left"><b>SMA/ SMK</b></td>
<td align="left"><b>PERGURUAN TINGGI</b></td>
</tr>';

// Fetch and print all the records:
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))	{
	echo'<tr>
		
		
		<td align ="left">' . $row['nama'] . '</td>
		<td align="left">' . $row['sd'] . '</td>
		<td align="left">' . $row['smp'] . '</td>
		<td align="left">' . $row['sma'] . '</td>
		<td align="left">' . $row['pt'] . '</td>
		</tr>
		';
	}
	echo '</table>';
	 mysqli_free_result ($r);
	} else { // If no records were returned. 
		echo '<p class="error">There are currently no registered users.</p>';
	}
mysqli_close($dbc);
//include ('includes/footer.html');

?>
