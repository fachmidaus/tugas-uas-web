<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Isi data';
	include ('includes/header.html');

	// Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.

	// Check for a first name:
	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$fn = trim($_POST['nama']);
	}

	// Check for a last name:
	if (empty($_POST['tanggal_lahir'])) {
	$errors[] = 'You forgot to enter your last name.';
	} else {
	$ln = trim($_POST['tanggal_lahir']);
	}

	// Check for an email address:
	if (empty($_POST['alamat'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$e = trim($_POST['alamat']);
	}
	
	if (empty($_POST['jenis_kelamain'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$jk = trim($_POST['jenis_kelamain']);
	}

	if (empty($_POST['no_telp'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$n = trim($_POST['no_telp']);
	}

	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	
	mysql_select_db("tuas_web", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO tuas_web.biodata (nama,tanggal_lahir, alamat,jenis_kelamin, no_telp)". 
	"values ('$fn', '$ln', '$e','$jk', '$n' )");
	$r = mysql_query ("SELECT * FROM biodata"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Selamat!</h1>
	<p>Sekarang anda telah melakukan Registrasi dan telah terdaftar di ngelamar.com!</p><p><br /></p>
	<p>Untuk melengkapi data pendidikan, silahkan pilih menu pendidikan!</p><p><br /></p>
	<p>Thank you.....</p><p><br /></p>';
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
	<h1>Isi Biodata</h1>
<table>

<form action="register.php" method="post">

		<tr>
			<td>Nama </td>
			<td>:</td>
			<td><input type="text" name="nama" size="15" maxlength="20" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" /></td>
		</tr>

		
		<tr>
			<td>Tanggal Lahir (yyyy-mm-dd) </td>
			<td>:</td>
			<td><input type="date" name="tanggal_lahir" size="15" maxlength="40" value="<?php if (isset($_POST['tanggal_lahir'])) echo $_POST['tanggal_lahir']; ?>" /></td>
		</tr>


		<tr>
			<td>Alamat </td>
			<td>:</td>
			<td><input type="text" name="alamat" size="20" maxlength="60" value="<?php if (isset($_POST['alamat'])) echo $_POST['alamat']; ?>" /> </td>
		</tr>


		<tr>
			<td>Jenis Kelamin </td>
			<td>:</td>
			<td><input type="text" name="jenis_kelamain" size="10" maxlength="20" value="<?php if (isset($_POST['jenis_kelamin'])) echo $_POST['jenis_kelamin']; ?>" /></td>
		</tr>


		<tr>
			<td>No Telpon </td>
			<td></td>
			<td><input type="integer" name="no_telp" size="12" maxlength="20" value="<?php if (isset($_POST['no_telp'])) echo $_POST['no_telp']; ?>" /></td>
		</tr>

		<tr>
			<td> </td>
			<td></td>
			<td><input type="submit" name="submit" value="Register" /></td>
		</tr>
			</form>
</table>






	<?php 
	include ('includes/footer.html');
	?>