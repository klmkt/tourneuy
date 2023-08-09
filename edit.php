<?php
require "koneksi.php";
if(isset($_POST["submit"])) {
    $id = $_POST['id'];
    $nama       = $_POST['nama'];
    $jeniskel   = $_POST['jenis_kel'];
    $game      = $_POST['game'];
    $ign       = $_POST['ign'];
    $umur       = $_POST['umur'];
    $telp       = $_POST['no_telp'];
    $rank      = $_POST['rank'];
    $platform       = $_POST['platform'];
$sql = mysqli_query ($koneksi, "UPDATE datapeserta SET nama = '$nama', ign = '$ign', no_telp = '$telp', umur  = '$umur', game = '$game', rank = '$rank', id_platform = '$platform' ,jenis_kel = '$jeniskel' WHERE id = '$id' ");
echo "<script>
alert('Data berhasil diubah!');
document.location.href = 'index.php?page=data';
</script>";
}

  $id = $_GET['id'];
$query_tampil = mysqli_query ($koneksi, "SELECT * FROM datapeserta WHERE id = '$id' ");

$edit = mysqli_fetch_array($query_tampil);



$query = mysqli_query($koneksi, "SELECT * FROM datapeserta ORDER BY id DESC");

?>
<?php

if (isset($_POST['submit'])) {

  if (edit($_POST)>0){

} else {
echo "<script>
alert('Data gagal diubah!');
document.location.href = 'index.php?page=data';
</script>";
return false;
}

}
$id = $_GET['id'];
$ambildata = mysqli_query($koneksi, "select * from datapeserta where id = $id");
while ($tampildata = mysqli_fetch_array($ambildata)) {

    ?>

<h1 style="color: #212121">
<center>📝 EDIT PENDAFTARAN 📝</center>
</h1>
<hr>
<div class="container" style="margin-top: -5px;">
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-25">
<label for="fname">ID Peserta</label>
</div>
<div class="col-75">
<input type="text" name="id" value="<?php echo $tampildata['id'] ?>" readonly>
</div>
</div>
<hr>
<div class="row">
<div class="col-25">
<label for="lname">Nama</label>
</div>
<div class="col-75">
<input type="text" name="nama" value="<?php echo $tampildata['nama'] ?>" autocomplete="off">
</div>
</div>
<hr>
<input type="hidden" name="id" value="<?php echo $tampildata["id"]?>"/>
<div class="row">
<div class="col-25">
<label for="lname">Jenis Kelamin</label>
</div>
<div class="col-75">
<div class="wrapper">
<input type="radio" name="jenis_kel" value="Pria" id="option-1" <?php
if($tampildata["jenis_kel"]=='Pria'){
echo "checked";
}
?>/>Pria
<input type="radio" name="jenis_kel" value="Wanita" id="option-2" <?php
if($tampildata["jenis_kel"]=='Wanita'){
echo "checked";
}
?>/>Wanita
<label for="option-1" class="option option-1">
<div class="dot"></div>
<!-- <span>Pria</span> -->
</label>
<label for="option-2" class="option option-2">
<div class="dot"></div>
<!-- <span>Wanita</span> -->
</label>
</div>
</div>
<hr>
<div class="row">
<div class="col-25">
<label for="tipe">Platform</label>
</div>
<div class="col-75">
 <select name="platform" id="tipe" required>
<option value="<?php echo $tampildata['id_platform'] ?>"></option>
<option value="1">PC</option>
 <option value="2">PS4</option>
<option value="3">XBOX</option>
 </select>
</div>
<hr>
<div>
        <table border=0 width="75%"><tr>
             <td width="20%">InGameName</td>
            <td><input type="text" name="ign" value="<?php echo $tampildata['ign'] ?>" Maxlength="25" size="25"></td></tr><tr>
            <td width="20%">Nomor Telpon</td>
            <td><input type="number" name="no_telp" value="<?php echo $tampildata['no_telp'] ?>" Maxlength="13" size="12"></td></tr>
            <td width="20%">Umur</td>
            <td><input type="number" name="umur" value="<?php echo $tampildata['umur'] ?>" Maxlength="2" size="5">Tahun</td></tr><tr>
            <td width="22%">Game
            <select name="game">
                <option value="Rainbow 6 Siege">Rainbow 6 Siege
                <option value="Apex Legends">Apex Legends
                </td>
                <td width="22%">Rank
            <select name="rank">
                <option value="Bronze">Bronze
                <option value="Silver">Silver
                <option value="Gold">Gold
                <option value="Platinum">Platinum
                <option value="Diamond">Diamond
                </td>

                        </td><tr>
            </select>
        </tr>
</div>

<script>
function showPreview(event){
if(event.target.files.length > 0){
var src = URL.createObjectURL(event.target.files[0]);
var preview = document.getElementById("file-ip-1-preview");
preview.src = src;
preview.style.display = "block";
}
}
</script>
<div style="margin-top: 10px;">
<input type="submit" name="submit" value="Edit" onclick="return confirm('Apa Anda yakin akan mengubah data?')">
<button type="button" onclick="location.reload();">Reset</button>
</div>
</form>
</div>
<?php
}
?>