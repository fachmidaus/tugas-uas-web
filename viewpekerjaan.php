<?php

// This script retrieves all the records from the users table. 
// This new version links to edit and delete pages.
$page_title = 'History Pekerjaan';

//include ('includes/header.html');

echo '<h1>History Pekerjaan Users</h1>';

require('mysqli_connect.php');

// Define the query:
$q = "SELECT nama, perusahaan, jabatan, tahun FROM pekerjaan ORDER BY nama ASC";
$r = @mysqli_query ($dbc, $q);

// Count the number of returned rows:
$num = mysqli_num_rows($r);
if ($num > 0) { // If it ran OK, display the records.
// Print how many users there are:
echo "<p> There are currently $num registered users.</p>\n";
// Table header:
echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
<tr>

<td align="left"><b>NAMA</b></td>
<td align="left"><b>PERUSAHAAN</b></td>
<td align="left"><b>JABATAN</b></td>
<td align="left"><b>TAHUN</b></td>

</tr>';

// Fetch and print all the records:
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))	{
	echo'<tr>
		
		<td align ="left">' . $row['nama'] . '</td>
		<td align="left">' . $row['perusahaan'] . '</td>
		<td align="left">' . $row['jabatan'] . '</td>
		<td align="left">' . $row['tahun'] . '</td>
		
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
