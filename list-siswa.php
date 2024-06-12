<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="list-siswa.css" />
</head>
<body>
    <header>
        <h3 style="text-align: center;">List Mahasiswa Yang Telah Mendafatar</h3>
    </header>

    <br>

    <table border="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            $no = 0;

            while($siswa = mysqli_fetch_array($query)): 
            $no++;
            ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $siswa['nama']; ?></td>
                <td><?= $siswa['alamat']; ?></td>
                <td><?= $siswa['jenis_kelamin']; ?></td>
                <td><?= $siswa['agama']; ?></td>
                <td><?= $siswa['sekolah_asal']; ?></td>
                

                
              </tr>
            <?php endwhile; ?>

        </tbody>
    </table>

    <p style="text-align: center;">Total Pendaftar: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>