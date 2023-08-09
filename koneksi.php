<?php
    //koneksi ke database melalui koneksi.php
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "tourneuy";

    $sambung=mysqli_connect($host,$user,$password,$dbname);

    $koneksi = mysqli_connect("localhost","root","","tourneuy") ;

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah(){

        global $koneksi;
    
        $nama       = $_POST['nama'];
        $jeniskel   = $_POST['jenis_kel'];
        $game      = $_POST['game'];
        $ign       = $_POST['ign'];
        $umur       = $_POST['umur'];
        $telp       = $_POST['no_telp'];
        $rank      = $_POST['rank'];
        $platform       = $_POST['platform'];



        $sql = "INSERT INTO datapeserta (nama,ign,no_telp,umur,game,rank,id_platform,jenis_kel) VALUES ('$nama','$ign','$telp','$umur','$game','$rank','$platform','$jeniskel')
        ";

        // $sql = "INSERT INTO tb_user VALUES
        //         nama='$nama',
        //         jenis_kel='$jeniskel',
        //         kelas='$kelas',
        //         hobi='$value',
        //         gambar='$gambar'
        //         ";


        mysqli_query($koneksi, $sql);
    
        return mysqli_affected_rows($koneksi);
    
    }

    function edit() {
        global $koneksi;

        $id = $_GET['id'];
    
        $nama       = $_POST['nama'];
        $jeniskel   = $_POST['jenis_kel'];
        $game      = $_POST['game'];
        $ign       = $_POST['ign'];
        $umur       = $_POST['umur'];
        $telp       = $_POST['no_telp'];
        $rank      = $_POST['rank'];
        $platform       = $_POST['platform'];



        

        // $sql = "UPDATE tb_user 'nama','jenis_kel','kelas','hobi','gambar' SET ('$nama''$jeniskel''$kelas''$value''$gambar') WHERE id = $id";

        
        $sql = "UPDATE datapeserta SET
                nama='$nama',
                ign='$ign',
                no_telp ='$telp',
                umur = '$umur',
                game = '$game'
                rank = '$rank',
                id_platform='$platform', 
                jenis_kel='$jeniskel'
                WHERE id = $id";
                
        mysqli_query($koneksi, $sql);
    
        return mysqli_affected_rows($koneksi);
    
    }

    function cari($keyword) {
        $query =("SELECT * FROM datapeserta, platform where datapeserta.id_platform= platform.id_platform and nama like '%$keyword%'  or datapeserta.id_platform= platform.id_platform and platform like '%$keyword%' ORDER BY id DESC");
                    
                    return query($query);
    }
?>