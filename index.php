<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Mahasiswa Universitas Airlangga</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand">Univeritas Airlangga Surabaya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="form-daftar.php"> Formulir Pendaftaran</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="https://unair.ac.id/">Profil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="carousel">
        <div class="hero d-flex">
        <h3 class="text-light">Formulir Pendaftaran Universitas Airlangga</h3><br>
          <div class="tombol d-flex justify-content-center">
            
            <button type="button" class="btn btn-primary m-4 ms-5 me-5"><a class="fst-none text-decoration-none text-warning" href="form-daftar.php">Daftar</a></button>
            <button type="button" class="btn btn-primary m-4 ms-5 me-5"><a class="fst-none text-decoration-none text-warning" href="list-siswa.php">Lihat Pendaftar</a></button>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
        <div class="col-md-2 p-3">
          <img src="images/kampus merdeka.jpg" class="w-100" alt="kampus merdeka.jpg">
        </div>
        <div class="col-md-2 p-3 align-items-center">
          <img src="images/h.png" class="w-100  align-items-center" alt="h.png">
        </div>
        <div class="col-md-2 p-3">
          <img src="images/logo.png" class="w-100" alt="logo.png">
        </div>
      </div>
    </section>
    <footer class="bg-tertiary p-4 d-flex justify-content-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.94545108762!2d112.76034323360484!3d-7.270812448472308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa21615added%3A0x1dfef59c76b5fee9!2sUniversitas%20Airlangga!5e0!3m2!1sen!2sid!4v1717470766808!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></footer>
    <section class="main bg-primary text-warning">
      <h4>PENDAFTARAN DIMULAI PADA TANGAL 20 AGUSTUS 2024</h4>
     <div> <div> 
    </section> 
    
    
    <?php if(isset($_GET['status'])): ?>
    <p>
      <?php
                if($_GET['status'] == 'sukses') {
                    echo "<script type='text/javascript'>alert('Pendaftaraan Anda Berhasil');</script";
                } else {
                    echo "<script type='text/javascript'>alert('Pendataran gagal!');</script";
                }
            
            ?>
    </p>
    <?php endif; ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
