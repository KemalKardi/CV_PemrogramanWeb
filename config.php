<?php
$host = 'localhost';
$db = 'cv_Kemal';
$user = 'root';
$pwd = 'Kemal2424@';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
