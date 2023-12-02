<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Website dengan Pop-up Pesanan</title>
  <!-- Load Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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

  <style>
    /* CSS tambahan untuk tata letak pop-up */
    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      z-index: 9999;
    }
  </style>
  
  <div class="container text-center mt-5">
    <h1>Selamat Datang di Coffee Shop</h1>
    <p>Silakan pesan menu favorit Anda.</p>

    <!-- Tombol "Pesan Sekarang" untuk memunculkan pop-up input pesanan -->
    <button class="btn btn-primary" onclick="showInputPopup()">Pesan Sekarang</button>

    <!-- Pop-up untuk menginput pesanan -->
    <div class="popup" id="popupInputPesanan">
      <h2>Formulir Pemesanan</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return showProcessingPopup()">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="menu">Pilih Menu:</label>
        <select id="menu" name="menu" required>
          <option value="Espresso">Espresso</option>
          <option value="Cappuccino">Cappuccino</option>
          <option value="Latte">Latte</option>
          <option value="Croissant">Croissant</option>
          <option value="Pancake">Pancake</option>
          <option value="Sandwich">Sandwich</option>
          <!-- Tambahkan opsi lain jika diperlukan -->
        </select><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required><br><br>

        <button type="submit" class="btn btn-success">Kirim Pesanan</button>
      </form>
    </div>

    <!-- Pop-up untuk menampilkan pesan pesanan sedang diproses -->
    <div class="popup" id="popupProses">
      <h2>Pesanan Diproses</h2>
      <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $menu = $_POST["menu"];
            $jumlah = $_POST["jumlah"];
            echo "Pesanan $menu sebanyak $jumlah oleh $nama sedang diproses. Terima kasih telah melakukan pemesanan!";
        }
        ?>
      </p>
      <button class="btn btn-danger" onclick="hideProcessingPopup()">Tutup</button>
    </div>
  </div>

  <!-- Load Bootstrap JS dan JavaScript Custom -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Fungsi untuk menampilkan pop-up input pesanan
    function showInputPopup() {
      document.getElementById('popupInputPesanan').style.display = 'block';
    }

    // Fungsi untuk menampilkan pop-up pesanan sedang diproses
    function showProcessingPopup() {
      document.getElementById('popupInputPesanan').style.display = 'none';
      document.getElementById('popupProses').style.display = 'block';
      return false; // Untuk mencegah pengiriman form (ke reload halaman)
    }

    // Fungsi untuk menyembunyikan pop-up pesanan diproses
    function hideProcessingPopup() {
      document.getElementById('popupProses').style.display = 'none';
    }
  </script>
</body>
</html>
