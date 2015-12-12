<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Riwayat Pendidikan';
	include ('includes/header.html');

	// Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.

	// Check for a first name:
	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$nm = trim($_POST['nama']);
	}
	
	if (empty($_POST['dasar'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$d = trim($_POST['dasar']);
	}

	// Check for a last name:
	if (empty($_POST['menengah'])) {
	$errors[] = 'You forgot to enter your last name.';
	} else {
	$m = trim($_POST['menengah']);
	}

	// Check for an email address:
	if (empty($_POST['atas'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$a = trim($_POST['atas']);
	}
	
	if (empty($_POST['tinggi'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$t = trim($_POST['tinggi']);
	}

	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	
	mysql_select_db("tuas_web", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO tuas_web.pendidikan(nama,"."sd, smp, sma,pt)". 
	"values ('$nm','$d', '$m', '$a','$t' )");
	$r = mysql_query ("SELECT * FROM pendidikan"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Selamat!</h1>
	<p> Anda telah mengisi pengisian Riwayat Pendidikan!</p><p><br /></p>
	<p>Untuk semakin melengkapi data anda, silahkan untuk mengisi Form Pekerjaan !</p><p><br /></p>';
	} else { // If it did not run OK.

	// Public message:
	echo '<h1>System Error</h1>
	<p class="error">You could not be registered due to a system error. '.
	'We apologize for any inconvenience.</p>';

	// Debugging message:
	//echo '<p>' mysql_error($Koneksi);
	} // End of if ($r) IF.
	mysql_close($Koneksi); // Close the database connection.

	// Include the footer and quit the script:
	include ('includes/footer.html');
	exit();
	} else { // Report the errors.
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	}
	foreach ($errors as $msg) { // Print each error.
	echo " - $msg<br />\n";
	}

	echo '</p><p>Please try again.</p><p><br /></p>';
	 }// End of if (empty($errors)) IF.
	 // End of the main Submit conditional.
	?>
	<h1>Isi Riwayat Pendidikan</h1>
<table>
	<form action="pendidikan.php" method="post">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" size="25" maxlength="20" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" /></td>
		</tr>

		<tr>
			<td>Pendidikan Dasar / SD</td>
			<td>:</td>
			<td><input type="text" name="dasar" size="25" maxlength="25" value="<?php if (isset($_POST['dasar'])) echo $_POST['dasar']; ?>" /></td>
		</tr>

		<tr>
			<td>Pendidikan Menengah / SMP</td>
			<td>:</td>
			<td><input type="text" name="menengah" size="30" maxlength="40" value="<?php if (isset($_POST['menengah'])) echo $_POST['menengah']; ?>" /></td>
		</tr>

		<tr>
			<td>Pendidikan Menengah Atas / SMA</td>
			<td>:</td>
			<td><input type="text" name="atas" size="30" maxlength="60" value="<?php if (isset($_POST['atas'])) echo $_POST['atas']; ?>" /> </td>
		</tr>

		<tr>
			<td>Perguruan Tinggi</td>
			<td>:</td>
			<td><input type="text" name="tinggi" size="30" maxlength="300" value="<?php if (isset($_POST['tinggi'])) echo $_POST['tinggi']; ?>" /></td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>	
			<td><input type="submit" name="submit" value="Simpan" /></td>
		</tr>
			</form>
</table>



	<?php 
	include ('includes/footer.html');
	?>