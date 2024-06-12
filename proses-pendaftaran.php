<?php

include("config.php");

if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];
    $email = $_POST['email'];

    echo $email;

    //buat array
    
    //$sql = "INSERT INTO calon_siswa (nama, email, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama','$email','$alamat', '$jk', '$agama', '$sekolah')";
    //$query = mysqli_query($db, $sql);

    //apakah queery simpan berhasil?
    //if( $query ) {
      //  header('Location: index.php?status=sukses');
   // } else {
   //     header('Location: index.php?status=gagal');
   // }
} else {
    die("akses dilarang...");
}

?>