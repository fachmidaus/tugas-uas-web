<?php

// This script retrieves all the records from the users table. 
// This new version links to edit and delete pages.
$page_title = 'History User';

//include ('includes/header.html');

echo '<h1>View Users</h1>';

require('mysqli_connect.php');

// Define the query:
$q = "SELECT user_id, nama, tanggal_lahir, alamat,jenis_kelamin, no_telp AS dr, user_id FROM biodata ORDER BY user_id ASC";
$r = @mysqli_query ($dbc, $q);

// Count the number of returned rows:
$num = mysqli_num_rows($r);
if ($num > 0) { // If it ran OK, display the records.
// Print how many users there are:
echo "<p> There are currently $num registered users.</p>\n";
// Table header:
echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
<tr>
<td align ="left"><b>Edit</b></td>
<td align="left"><b>Delete</b></td>
<td align="left"><b>User</b></td>
<td align="left"><b>Nama</b></td>
<td align="left"><b>Tanggal Lahir</b></td>
<td align="left"><b>Alamat</b></td>
<td align="left"><b>Jenis Kelamin</b></td>
<td align="left"><b>No Telpon</b></td>
</tr>';

// Fetch and print all the records:
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))	{
	echo'<tr>
		<td align="left"><a href="edit_user.php?id=' . $row['user_id'].
		' ">Edit</a></td>
		<td align="left"><a href="delete_user.php?id=' . $row['user_id'].
		'">Delete</a></td>
		<td align ="left">' . $row['user_id'] . '</td>
		<td align ="left">' . $row['nama'] . '</td>
		<td align="left">' . $row['tanggal_lahir'] . '</td>
		<td align="left">' . $row['alamat'] . '</td>
		<td align="left">' . $row['jenis_kelamin'] . '</td>
		<td align="left">' . $row['dr'] . '</td>
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
