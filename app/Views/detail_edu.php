<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Icon</title>
  <link rel="stylesheet" href="<?= base_url() ?>public/assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
</head>
<body background="https://png.pngtree.com/thumb_back/fh260/back_pic/00/05/66/1356275836021ea.jpg">
  <div class="container">
    <!-- Gambar -->
    <img class="responsive-image" src="<?php echo base_url('public/edukasi/') . @$data->foto;?>" alt="">
    </div>

   
    <div class="card">
  <center>
    <h3><?php echo @$data->judul?></h3>
    </center>
   <p style="font-style: italic;" ><?php echo @$data->deskripsi?></p>




<!-- end saran -->


</div>

<center>
<button style="margin-top: 10px; border-radius: 10px; width: 100px; height: 25px; color: black; background-color: white; border-color: white; font-weight: bold;" >Kembali</button>
</center>
    
    <!-- Bottom Navbar -->
    <div class="bottom-navbar">

      <a href="<?= base_url('/') ?>" class="nav-item" id="home">
        <i class="fas fa-home"></i>
      </a>
      <a href="<?= base_url('edukasi') ?>" class="nav-item" id="search">
        <i class="fas fa-search"></i>

        <a href="<?= base_url('mood') ?>" class="nav-item2" id="search">
          <i class="fas fa-receipt"></i>

          <a href="<?= base_url('profil') ?>" class="nav-item" id="profile">
            <i class="fas fa-user"></i>
          </a>
    </div>

    <!-- Modal -->
    <div id="info-modal" class="modal">
      <div class="modal-content">
        <span class="close" id="close-modal">&times;</span>
        <h2>Informasi</h2>
        <p>Nama Anda adalah data yang digunakan untuk identifikasi di sistem kami.</p>
      </div>
    </div>

    <script src="<?= base_url() ?>/public/assets/script.js"></script>
</body>


<script>
    // Script untuk membuka dan menutup modal
    const infoIcon = document.getElementById('info-icon');
    const modal = document.getElementById('info-modal');
    const closeModal = document.getElementById('close-modal');

    infoIcon.addEventListener('click', () => {
      modal.style.display = 'block';
    });

    closeModal.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>

<style>
  /* Gambar responsif */
  .responsive-image {
    width: 100vw;
    /* Lebar 100% dari viewport */
    height: 30vh;
    /* Tinggi 25% dari viewport */
    object-fit: fill;
    /* Menjaga rasio gambar tanpa merusak proporsinya */
    display: block;
    /* Menghindari spasi di bawah gambar */
    position: relative;

  }

  /* Teks di atas gambar */
  .text-overlay {
    position: absolute;
    /* Menempatkan teks di atas gambar */
    top: 16%;
    left: 5%;
    /* Menempatkan teks di tengah secara vertikal */
    text-align: left;
    /* Teks diatur agar rata tengah */
    color: white;
    /* Warna teks putih untuk kontras dengan gambar */
    font-family: 'Arial', sans-serif;
    /* Mengatur jenis font */
  }

  .text-overlay h2 {
    font-size: 24px;
    /* Ukuran font judul */
    margin: 0;
    /* Menghilangkan margin */
    font-weight: bold;
    /* Teks tebal */
    color: brown;
  }

  .text-overlay p {
    font-size: 16px;
    /* Ukuran font deskripsi */
    margin-top: 10px;
    /* Jarak antara judul dan deskripsi */
    font-weight: normal;
    color: brown;
  }
  /* Container untuk menampung gambar dan card */
  .container {
    position: relative;
  }
  
  .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      border-radius: 10px;
      width: 80%;
      max-width: 400px;
      text-align: center;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .info-icon {
      margin-left: 10px;
      cursor: pointer;
      color: #007bff;
    }

    .info-icon:hover {
      color: #0056b3;
    }

  /* Styling untuk Card */
  .card {
    margin: 20px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-top: 15px;
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: left;
  }

  .card h3 {
    margin-bottom: 15px;
    font-size: 18px;
    color: #333;
  }

  /* Styling untuk Radio Button dalam satu baris */
  .radio-group {
    display: flex;
    justify-content: center;
    gap: 20px; /* Jarak antar radio button */
  }

  .radio-group input[type="radio"] {
    margin-right: 1px; /* Jarak antara radio button dengan label */
  }

  .radio-group label {
    font-size: 16px;
    color: #555;
    cursor: pointer; /* Memberikan efek kursor pada label */
  }

  /* Responsif untuk tampilan mobile */
  @media (max-width: 768px) {
    .icon-box-container {
      justify-content: column;
      /* Menjaga ikon tetap rata pada tampilan mobile */
    }
  }
</style>
</html>