<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div style="overflow-x:auto; width: 100%;">
<!-- Search bar -->
<?php
require "koneksi.php";
$user = query("SELECT * FROM datapeserta, platform where datapeserta.id_platform= platform.id_platform ORDER BY id DESC");
error_reporting(0);

        // Tombol cari ditekan
if(isset($_POST["cari"])) {
$user = cari($_POST["keyword"]);
$search = $_POST['keyword'];
} else {

}

?>
<br>
<center>
<div>
<div>
<form action="" method="post">
<input type="text" name="keyword" placeholder="Cari keyword" size="40"
autocomplete="off" autofocus>
<button type="submit" name="cari" ><i class="fa fa-search"></i></button>
</form>
</div>
<p>
<?php
if($search) {
echo "Anda mencari berdasarkan nama atau platform : $search";
} else {
echo "<p style='color: maroon;'>Peserta tidak ditemukan</p>";
}
?>
</p>
</center>
<!-- Search bar End -->
<!--awal table-->
<center><table class="center" border="5" cellpadding="10" cellspacing="0">
<!--awal header table-->
<tr class="center" align="center">
<th>No </th>
<!-- <th>ID Siswa</th> -->
<th>Nama</th>
<th>In Game Name</th>
<th>Nomor Telpon</th>
<th>Umur</th>
<th>Game</th>
<th>Rank</td>
<th>Platform</th>
<th>Jenis Kelamin</th>
</tr>
<!--akhir header table-->
<?php echo $id['id'] ?>
<?php foreach( $user as $row ) : ?>
<!--awal menampilkan data dari tabel buku ke halaman web-->
<tr align="center">
<td> <?php echo $row['id'] ?></td>
<td> <?php echo $row['nama'] ?></td>
<td> <?php echo $row['ign']?></td>
<td> <?php echo $row['no_telp']?></td>
<td> <?php echo $row['umur']?></td>
<td> <?php echo $row['game']?></td>
<td> <?php echo $row['rank']?></td>
<td> <?php echo $row['platform']?></td>
<td> <?php echo $row['jenis_kel']?></td>
<td align="center">
</center>
<a style="text-decoration: none" href="index.php?page=edit&id=<?php echo $row['id'];?>">
Edit
</a>
{}
<a style="text-decoration: none" href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Akun?')">
Delete
</a>
</td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
<!--akhir menampilkan data dari tabel buku ke halaman web-->
</table>
<!--akhir table-->
</div>