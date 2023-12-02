<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>CoffeShop</title>';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">';
echo '</head>';
echo '<body>';
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">';
echo '<a class="navbar-brand" href="#">CoffeShop</a>';
echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<div class="collapse navbar-collapse" id="navbarNav">';
echo '<ul class="navbar-nav ml-auto">';
echo '<li class="nav-item active">';
echo '<a class="nav-link" href="website.php">Beranda</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="tentangkami.php">Tentang Kami</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="menu.php">Menu</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="kontak.php">Kontak</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
echo '';
echo '<div class="container my-5">';
echo '<div class="row">';
echo '<div class="col-lg-6">';
echo '<h1>Selamat Datang di Kopi Shop</h1>';
echo '<p>Nikmati pengalaman minum kopi terbaik di sini! Temukan berbagai pilihan kopi berkualitas tinggi untuk memanjakan lidah Anda.</p>';
echo '<a href="menu.php" class="btn btn-primary">Lihat Menu</a>';
echo '</div>';
echo '<div class="col-lg-6">';
echo '<img src="coffeshop.jpeg" alt="Kopi" class="img-fluid" style="width: 500px; height: 500px;">';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-4">';
echo '<div class="card">';
echo '<img src="kopi1.jpeg" class="card-img-top" alt="Kopi Espresso">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Menu Best Seller</h5>';
echo '<p class="card-text">Espresso.<br>Kopi dengan rasa kuat dan pekat, cocok untuk pencinta kopi sejati.</p>';
echo '<a href="pesanan.php" class="btn btn-primary">Pesan Sekarang</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-lg-4">';
echo '<div class="card">';
echo '<img src="makanan1.jpeg" class="card-img-top" alt="Croissant">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Menu Best Seller</h5>';
echo '<p class="card-text">Croissant.<br>Pastry yang populer sebagai hidangan khas di Prancis yang berbentuk bulan sabit.</p>';
echo '<a href="pesanan.php" class="btn btn-primary">Pesan Sekarang</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-lg-4">';
echo '<div class="card">';
echo '<img src="kopi2.jpeg" class="card-img-top" alt="Cappuccino">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Menu Best Seller</h5>';
echo '<p class="card-text">Cappucino.<br>Kopi dengan kombinasi sempurna antara espresso, susu, dan busa susu.</p>';
echo '<a href="pesanan.php" class="btn btn-primary">Pesan Sekarang</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<footer class="bg-dark text-white text-center py-3">';
echo '<p>&copy; 2023 CoffeShop</p>';
echo '</footer>';
echo '';
echo '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd';
echo '';
?>