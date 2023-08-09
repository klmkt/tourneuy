<?php
    //koneksikan dengan database
    include "koneksi.php";

    //ambil idsiswa yang akan dihapus sebagai referensi
    $idpeserta=$_GET['id'];

    //query untuk menghapus data siswa
    mysqli_query($sambung,"delete from datapeserta where id='$idsiswa'");

    //arahkan ke halaman data siswa setelah menghapus 1 data siswa
    echo "<script>
            alert('Berhasil Dihapus, Peserta Berkurang!');
            document.location.href = 'index.php?page=data';
            </script>";
?>