<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Icon</title>
  <link rel="stylesheet" href="<?= base_url() ?>public/assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
</head>
<body>
  <div class="container">
    <!-- Gambar -->
    <img class="responsive-image" src="https://img.clipart-library.com/2/clip-gif-doctor-cartoon/clip-gif-doctor-cartoon-13.gif" alt="">

   

    <h3 style="padding-top: 10px; padding-left: 10px;">Tranding Edukasi</h3>

    <div class="card-container">
    <?php foreach ($data->getResult() as $row): ?>  
    <div class="card">
        <img src="<?= base_url('public/edukasi/') . $row->foto;?>" alt="Card Image" class="card-image">
        <h3><?= $row->judul?></h3>
        <a href="<?= base_url('edukasi/detail/' . $row->id) ?>">baca</a>
      </div>
      <?php endforeach?>
    </div>
    <!-- Bottom Navbar -->
    <div class="bottom-navbar">

<a href="<?= base_url('/') ?>" class="nav-item" id="home">
  <i class="fas fa-home"></i>
</a>
<a href="<?= base_url('edukasi') ?>" class="nav-item2" id="search">
  <i class="fas fa-search"></i>

  <a href="<?= base_url('mood') ?>" class="nav-item" id="search">
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
        <p>Berikut ini adalah informasi untuk menambah pengetahuan menstruasi anda.</p>
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
    position: fixed;
    /* Menempatkan teks di atas gambar */
    top: 20%;
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
  /* Container untuk card */
  .card-container {
    display: flex;
    flex-direction: column; /* Tata letak kolom */
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
    margin-top: 10px;
    padding: 10px;
  }

  .card {
  background-color: white;
  padding: 0; /* Hapus padding agar gambar mengisi dengan tepat */
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  text-align: center;
  width: 80%;
  max-width: 400px;
  height: 230px; /* Atur tinggi card tetap */
  display: flex;
  flex-direction: column; /* Susun gambar dan teks secara vertikal */
}

.card img.card-image {
  height: 50%; /* Gambar mengisi setengah tinggi card */
  width: 100%; /* Pastikan gambar mengisi lebar penuh */
  object-fit: fill; /* Paksa gambar memenuhi area */
  border-radius: 10px 10px 0 0; /* Tetap bulatkan sudut atas */
}

.card h3 {
  font-size: 20px;
  margin: 10px 0 5px 0; /* Atur jarak bawah lebih kecil */
}

.card p {
  font-size: 16px;
  margin: 0; /* Hilangkan margin atas dan bawah */
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

  /* Responsif untuk tampilan mobile */
  @media (max-width: 768px) {
    .icon-box-container {
      justify-content: column;
      /* Menjaga ikon tetap rata pada tampilan mobile */
    }
  }
</style>
</html>