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
    <img class="responsive-image" src="<?= base_url() ?>public/assets/foto/dashboard.png" alt="">

    <div class="text-overlay">
      <h2>Hai, <?php echo @$data->nama ?>
      <i class="fas fa-question-circle info-icon" id="info-icon"></i>
    </h2>
      <p>Selamat Datang Kembali</p>
    </div>
    <div class="card-container">
    <div class="card">
        <p style="font-style: italic;">
            <?php 
                if (!empty($data->meter)) {
                    // Konversi tanggal mens terakhir ke timestamp
                    $mensTerakhir = strtotime($data->meter);

                    // Tambahkan 21 hari
                    $mensBerikutnya = strtotime("+21 days", $mensTerakhir);

                    // Formatkan tanggal untuk ditampilkan
                    echo "Perkiraan Mens Berikutnya: " . date("d-m-Y", $mensBerikutnya);
                } else {
                    echo "Tanggal mens terakhir tidak tersedia.";
                }
            ?>
        </p>
    </div>
      <div class="card">
     
      <p style="font-style: italic;">
            <?php 
                if (!empty($data->meter)) {
                    // Konversi tanggal mens terakhir ke timestamp
                    $mensTerakhir = strtotime($data->meter);

                    // Tambahkan 21 hari
                    $mensBerikutnya = strtotime("+18 days", $mensTerakhir);

                    // Formatkan tanggal untuk ditampilkan
                    
                    echo "Masa Subur: " . date("d-m-Y", $mensBerikutnya);
                    
                } else {
                    echo "Tanggal mens terakhir tidak tersedia.";
                }
            ?>
        </p>
        <br>
      </div>
    </div>

    <div class="card-container">
      <div class="card">
        <img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExZHY5cm9oYzVobTRvYzU3bng0bmQxd2ZkNTRuc3dtczgza2U1OWp3ciZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/XdhDcN4FVtSzNCUUBT/giphy.webp" alt="Card Image" class="card-image">
        <h3>Anemia</h3>
        <a href="<?= base_url('survey1')?>">Test</a>
      </div>
      <div class="card">
        <img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExZHY5cm9oYzVobTRvYzU3bng0bmQxd2ZkNTRuc3dtczgza2U1OWp3ciZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/XdhDcN4FVtSzNCUUBT/giphy.webp" alt="Card Image" class="card-image">
        <h3>Dysmenorhea</h3>
        <a href="<?= base_url('survey2')?>">Test</a>
      </div>
    </div>
    <!-- Bottom Navbar -->
    <div class="bottom-navbar">

      <a href="<?= base_url('/') ?>" class="nav-item2" id="home">
        <i class="fas fa-home"></i>
      </a>
      <a href="<?= base_url('edukasi') ?>" class="nav-item" id="search">
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
        <div class="card-container2">
          <img style=" margin-bottom: 20px; max-width: 150px;" src="https://cdn.dribbble.com/users/6498639/screenshots/15142979/doctor_with_notepad_.gif" alt="">
      
          <div class="card2">
        <h3>Mood Hari Ini</h3>
        <p style="font-style: italic;">(<?php echo @$data->mood ?>)</p>
      </div>
      <div class="card2">
        <h3>Volume Darah</h3>
        <p style="font-style: italic;">(<?php echo @$data->takaran?>)</p>
      </div>
      <a href="<?= base_url('mood')?>"><button style="border-radius: 10px; background-color: pink; color: white; border-color: white; width: 70px; height: 30px;">Ubah</button></a>

    </div>
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
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
    gap: 10px;
    padding-left: 10px;
    padding-right: 10px;
    flex-wrap: wrap;
    /* Agar card dapat membungkus ke bawah pada layar kecil */
  }

  .card-container2 {
    display: column;
    justify-content:center;
    align-items: center;
    margin-top: 20px;
    gap: 10px;
    padding-left: 10px;
    padding-right: 10px;
    flex-wrap: wrap;
    /* Agar card dapat membungkus ke bawah pada layar kecil */
  }

  .card {
    background-color: #ffe4e1;
    /* Warna putih sedikit pink */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 45%;
    transition: all 0.3s ease;
    /* Efek transisi untuk interaksi */
  }

  .card2 {
    background-color: #ffe4e1;
    /* Warna putih sedikit pink */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    margin-bottom: 20px;
    transition: all 0.3s ease;
    /* Efek transisi untuk interaksi */
  }

  .card img.card-image {
    width: 100%;
    height: 100%;
    border-radius: 10px 10px 0 0;
    object-fit: cover;
  }

  .card h3 {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .card p {
    font-size: 16px;
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
      justify-content: space-evenly;
      /* Menjaga ikon tetap rata pada tampilan mobile */
    }
  }
</style>
<script>
    function closeModal() {
        document.getElementById('modal-content2').style.display = 'none';
    }
</script>
</html>