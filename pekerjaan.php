<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Pengalaman Kerja';
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
	
	if (empty($_POST['perusahaan'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$pr = trim($_POST['perusahaan']);
	}

	// Check for a last name:
	if (empty($_POST['jabatan'])) {
	$errors[] = 'You forgot to enter your last name.';
	} else {
	$jb = trim($_POST['jabatan']);
	}

	// Check for an email address:
	if (empty($_POST['tahun'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$th = trim($_POST['tahun']);
	}
	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	
	mysql_select_db("tuas_web", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO tuas_web.pekerjaan(nama,"."perusahaan, jabatan, tahun)". 
	"values ('$nm','$pr', '$jb', '$th')");
	$r = mysql_query ("SELECT * FROM pekerjaan"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Selamat!</h1>
	<p> Anda telah melengkapi semua data anda!</p><p><br /></p>
	<p>Terima Kasih Anda Telah Melakukan Registrasi di ngelamar.com </p><p><br /></p>
	<p>Semoga Beruntung, God Bless.... </p><p><br /></p>';
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
	<h1>Isi Data Pengalaman Kerja</h1>
	<form action="pekerjaan.php" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" size="25" maxlength="20" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" /></td>
	</tr>

	<tr>
		<td>Nama Perusahaan</td> 
		<td>:</td>
		<td><input type="text" name="perusahaan" size="25" maxlength="25" value="<?php if (isset($_POST['perusahaan'])) echo $_POST['perusahaan']; ?>" /></td>
	</tr>

	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><input type="text" name="jabatan" size="30" maxlength="40" value="<?php if (isset($_POST['jabatan'])) echo $_POST['jabatan']; ?>" /></td>
	</tr>

	<tr>
		<td>Tahun</td>
		<td>:</td>
		<td><input type="text" name="tahun" size="6" maxlength="6" value="<?php if (isset($_POST['tahun'])) echo $_POST['tahun']; ?>" /> </td>
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