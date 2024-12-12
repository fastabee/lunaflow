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

<div id="modal-survey" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 20px; border-radius: 8px; width: 300px; text-align: center;">
    <img style="max-width: 40%;" src="https://cdn.pixabay.com/animation/2022/08/06/11/57/11-57-43-584_512.gif"  alt="">    
    <h2 style="margin-bottom: 15px;">Informasi Survey</h2>
        <p style="margin-bottom: 20px;">Pengisian survey akan menganalisa indikasi anemia dan Dysmenorrhea pada gejala menstruasi anda</p>
        <button id="close-modal" style="padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Tutup
        </button>
    </div>
</div>

  <div class="container">
    <!-- Gambar -->
    <img class="responsive-image" src="https://s3-alpha-sig.figma.com/img/617c/fe17/8ef669140428e26f9ae4b200f8c3ed54?Expires=1733702400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=norDi0lYmRNOWOwwWdCOYmXB8eXyS8NGDXgtkEbiXV77t0I1YHdZNeSpSd2KhPOGCNHyDLLjxpNwuyN~dePfsSAT4iwlj2MMOStH7NfHKcucgmlbp74ICHhDFTAPQ24PfePhD4wJQNFx5BckN1SkGuO2~jOe5U7zBs-VDnCUo9xGklVP4CNjdex6JscuoamaGGLFBGvcZygLMtdnT~QynfyviFyF6m2ZAixK~-7xCqiQ4tQE45nrMvOYXVyFDZTSTww3fihyXTKqgIvHlfmZiLHlGkxticuUpR5hlr4Tv97s5XEyEje05kd864Dqf6MKzum-0iwoyvU5pS31VYeWSg__" alt="">

    <div class="text-overlay">
      <h2>Hai, <?php echo @$data->nama ?>
      <i class="fas fa-question-circle info-icon" id="info-icon"></i>
    </h2>
      <p>Temukan saran dan permasalahan anda</p>
    </div>
    <form action="<?= base_url('insert/survey1') ?>" method="post" enctype="multipart/form-data"
    class="login__form">
    <input type="text" name="id" value="<?php echo @$data->id?>" hidden>

    <h4 style="margin-top: 10px; padding-left: 20px;" >Gejala Anemi</h4>
    <div class="card">
  <h5>Apakah Anda sering merasa lelah atau lemah?</h5>

    <div class="radio-group">
      <input type="radio" id="yes" name="1" value="1">
      <label for="yes">Iya</label>
      
      <input type="radio" id="no" name="1" value="0">
      <label for="no">Tidak</label>
    </div>

</div>

<div class="card">
  <h5>Apakah Anda mengalami pusing atau sakit kepala?</h5>

    <div class="radio-group">
      <input type="radio" id="yes" name="2" value="1">
      <label for="yes">Iya</label>
      
      <input type="radio" id="no" name="2" value="0">
      <label for="no">Tidak</label>
    </div>

</div>

<div class="card">
  <h5>Apakah Anda mengalami kulit pucat atau kekuningan?</h5>

    <div class="radio-group">
      <input type="radio" id="yes" name="3" value="1">
      <label for="yes">Iya</label>
      
      <input type="radio" id="no" name="3" value="0">
      <label for="no">Tidak</label>
    </div>

</div>

<div class="card">
  <h5>Apakah Anda mengalami kesulitan berkonsentrasi?</h5>
  
    <div class="radio-group">
      <input type="radio" id="yes" name="4" value="1">
      <label for="yes">Iya</label>
      
      <input type="radio" id="no" name="4" value="0">
      <label for="no">Tidak</label>
    </div>

</div>

<div class="card">
  <h5>Apakah Anda mengonsumsi makanan yang kaya zat besi?</h5>
 
    <div class="radio-group">
      <input type="radio" id="yes" name="5" value="1">
      <label for="yes">Iya</label>
      
      <input type="radio" id="no" name="5" value="0">
      <label for="no">Tidak</label>
    </div>
  
</div>

<div class="card">
  <h5>Apakah Anda mengkonsumsi suplemen zat besi atau vitamin?</h5>
  
    <div class="radio-group">
      <input type="radio" id="yes" name="6" value="1">
      <label for="yes">Iya</label>
      
      <input type="radio" id="no" name="6" value="0">
      <label for="no">Tidak</label>
    </div>

</div>

<center>
<button type="submit" style="margin-top: 10px; border-radius: 10px; width: 100px; height: 25px; color: white; background-color: pink; border-color: white; font-weight: bold;" >Simpan</button>
</center>
</form>
    
    


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
    top: 10%;
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
    padding: 15px;
    background-color: pink;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
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
<script>
    // Menampilkan modal saat halaman selesai dimuat
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("modal-survey");
        const closeModal = document.getElementById("close-modal");

        // Tampilkan modal
        modal.style.display = "flex";

        // Tutup modal
        closeModal.addEventListener("click", function () {
            modal.style.display = "none";
        });
    });
</script>

</html>