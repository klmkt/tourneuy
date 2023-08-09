<?php

  require 'koneksi.php';

  if (isset($_POST['submit'])) {

    if (tambah($_POST)>0){

      echo "<script>
alert('Pendaftaran Sukses, kamu sudah jadi peserta!');
document.location.href = 'index.php?page=data';
</script>";

    }else{

      echo "<script>
alert('Gagal Mendaftar, pastikan sudah mengisi dengan benar!');
document.location.href = 'index.php?page=data';
</script>";

    }

  }

 ?>

<h1 style="color: cyan">
<center>DAFTAR</center>
</h1>

<center>
<form method="Post">
        <table border=0 width="75%"><tr>
            <td width="20%">Nama Peserta</td>
            <td><input type="text" name="nama" Maxlength="25" size="25"></td></tr><tr>
             <td width="20%">InGameName</td>
            <td><input type="text" name="ign" Maxlength="25" size="25"></td></tr><tr>
            <td width="20%">Nomor Telpon</td>
            <td><input type="number" name="no_telp" Maxlength="13" size="12"></td></tr>
            <td width="20%">Umur</td>
            <td><input type="number" name="umur" Maxlength="2" size="5">Tahun</td></tr><tr>
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
            <td width="22%">Platform
            <select name="platform">
                    <option value="1">PC
                    <option value="2">PS4
                        <option value="3">XBOX

                        </td><tr>
            </select>
            <td width="20%">Jenis Kelamin</td>
            <td><input type="radio" name="jenis_kel" Checked Value="Laki-Laki">Laki-Laki
               <input type="radio" name="jenis_kel" Checked Value="Perempuan">Perempuan 
                </td></tr>
            <td><input type="submit" name="submit" class="btn btn-tambah">
            <button type="reset" name="reset" onclick="location.reload();">Reset</button>
                <input type="reset" value="Cancel"></td>
        </tr>
    </form>
    </center>
<hr>
</div>
</form>
</div>