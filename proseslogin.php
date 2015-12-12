<?php
session_start();
require_once ('mysqli_connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.
	}
$u = $_POST['user_id'];
$p = $_POST['password'];
$Koneksi = mysql_connect("localhost","root","");
		   mysql_select_db("tuas_web", $Koneksi);
$r = mysql_query("SELECT * FROM biodata WHERE user_id = '$u'");
$jum = mysql_num_rows($r);
$has = mysql_fetch_array($r);
if ( $r == 0 ) {
    echo 'User ID Belum Terdaftar!<br/>';
    echo '<a href="index.php">&laquo; Back</a>';
} else {
    if ( $p <> $has['password'] ) {
        echo 'Password Salah!<br/>';
        echo '<a href="index.php">&laquo; Back</a>';
    } else {
        $login_session['user'] = $user;
        header('location:index.php');
    }
}
?>