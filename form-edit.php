<?php 

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id']) ) {
    header('Location: list-siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if ( mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Mahasiswa Universitas Airlangga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <h3 style="text-align: center;">Formulir Edit Mahasiswa</h3>
    </header>

    <form style="width: 100%;max-width: 550px;margin: 0 auto;" action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>

        <p class="w-100 d-flex flex-column justify-content-center align-items-center">
            <label class="w-100 mb-2" for="nama">Nama :</label>
            <input class="w-100" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama']?>"/>
        </p>

        <p class="w-100 d-flex flex-column justify-content-center align-items-center">
            <label class="w-100 mb-2" for="alamat">Alamat :</label>
            <input class="w-100" type="text" name="alamat" value="<?php echo $siswa['alamat']?>"></input>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label for=""><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": ""?>>Laki-laki</label>
            <label for=""><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": ""?>>Perempuan</label>              
        </p>
        <p>
            <label for="agama">Agama :</label>
            <?php $agama = $siswa['agama'];?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": ""?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": ""?>>Kristen</option>
                <option <?php echo ($agama == 'Katolik') ? "selected": ""?>>Katholik</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": ""?>>Hindu</option>
                <option <?php echo ($agama == 'Buddha') ? "selected": ""?>>Buddha</option>
                <option <?php echo ($agama == 'Konghucu') ? "selected": ""?>>Konghucu</option>
            </select>
        </p>
        <p class="w-100 d-flex flex-column justify-content-center align-items-center">
            <label class="w-100 mb-2" for="asal_sekolah">Asal Sekolah: </label>
            <input  class="w-100"type="text" name="asal_sekolah" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>"/>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan">
        </p>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </form>
</body>
</html>