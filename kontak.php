<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Navbar content -->
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CoffeShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="website.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <h2>Kontak Kami</h2>
        <p>Jangan ragu untuk menghubungi kami melalui informasi kontak di bawah ini:</p>
      </div>
      <div class="col-lg-6">
        <h3>Informasi Kontak</h3>
        <p><strong>Alamat:</strong> Jl.A.P. Pettarani No. 123, Kota Makassar</p>
        <p><strong>Email:</strong> info@CoffeShop.com</p>
        <p><strong>Telepon:</strong> (123) 456-7890</p>
      </div>
      <div class="col-lg-6">
        <h3>Formulir Kontak</h3>
        <form id="formKontak" action="proses.php" method="post">
          <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
          </div>
          <div class="form-group">
            <label for="pesan">Pesan:</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Masukkan pesan" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="kirim">Kirim Pesan</button>
        </form>
        
        <!-- Tampilan setelah pesan terkirim -->
        <?php
        if (isset($_POST['kirim'])) {
          // Jika formulir dikirim, tampilkan pesan terkirim
          echo '<div class=pesan-terkirim mt-3" id="pesanTerkirim">';
          echo '<h4>Pesan Terkirim!</h4>';
          echo '<p>Terima kasih telah mengirim pesan.</p>';
          echo '</div>';
        }
        ?>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2023 CoffeShop</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>