<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Silkscreen&display=swap" rel="stylesheet">
<title>Turnamen Gim R6 & APEX</title>
</head>

<body>
<div>
<center>
<h1>List Peserta Tournament Tembak-Menembak</h1>
<a href="index.php?page=data">List
</a>
<>
<a href="index.php?page=tambah">Daftar</a>
</center>
</div>
<div style="height: 100%; width: 100%;">
<?php
if (isset($_GET['page'])) {
$page = $_GET['page'];
switch ($page) {
case 'data':
include "data.php";
break;
case 'edit':
include "edit.php";
break;
case 'tambah':
include "tambah.php";
break;
case 'cari':
include "cari.php";
break;
default:
echo "<h1 style='padding: 20%; color: red;'>😫 Maaf halaman yang anda tuju tidak ada</h1>";
break;
}
}
?>
</div>
</body>

</html>