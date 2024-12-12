<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Icon</title>
  <link rel="stylesheet" href="<?= base_url() ?>public/assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
</head>
<body background="https://img.freepik.com/free-photo/pastel-pink-vignette-concrete-textured-background_53876-129734.jpg?semt=ais_hybrid">
  <div class="container">
    <!-- Gambar --> 
<br><br><br><br><br>
<form action="<?= base_url('updateprofil') ?>" method="post" enctype="multipart/form-data"
class="login__form">
<div class="profile-photo">
  <img id="profileImage" src="<?php echo base_url('public/foto_profil/') . @$data->foto;?>" alt="Foto Profil">
  <input type="file" id="imagePicker" accept="image/*" style="display: none;" name="foto">
  <label for="imagePicker" style="display: block; text-align: center; color: white; background-color: pink; padding: 5px 10px; border-radius: 5px; cursor: pointer; margin-top: 10px;">Pilih Gambar</label>
</div>
    <input type="text" name="id" value="<?php echo @$data->id?>" hidden>
      <label style="margin-left: 20px; color: red; font-style: italic; font-size: medium;">Nama</label>
      <input style="border-radius: 10px; margin-left: 20px; width: 80%; height: 30px; font-style: italic; color: white; background-color: pink; padding-left: 10px; margin-bottom: 20px;" type="text" name="nama"  value="<?php echo @$data->nama?>">
      <br>
      <label style="margin-left: 20px; color: red; font-style: italic; font-size: medium;">Username</label>
      <input style="border-radius: 10px; margin-left: 20px; width: 80%; height: 30px; font-style: italic; color: white; background-color: pink; padding-left: 10px; margin-bottom: 20px" type="text" name="username"  value="<?php echo @$data->username?>">
      <br>
      <label style="margin-left: 20px; color: red; font-style: italic; font-size: medium;">Email</label>
      <input style="border-radius: 10px; margin-left: 20px; width: 80%; height: 30px; font-style: italic; color: white; background-color: pink; padding-left: 10px; margin-bottom: 20px" type="text" name="email"  value="<?php echo @$data->email?>">
      <br>
      <label style="margin-left: 20px; color: red; font-style: italic; font-size: medium;">Nomor</label>
      <input style="border-radius: 10px; margin-left: 20px; width: 80%; height: 30px; font-style: italic; color: white; background-color: pink; padding-left: 10px; margin-bottom: 20px" type="text"  name="nomor" value="<?php echo @$data->nomor?>">

      <br>
      <label style="margin-left: 20px; color: red; font-style: italic; font-size: medium;">Password</label>
      <input style="border-radius: 10px; margin-left: 20px; width: 80%; height: 30px; font-style: italic; color: white; background-color: pink; padding-left: 10px; margin-bottom: 20px" type="text" name="password" value="<?php echo @$data->password?>">
       
      <br>
      <label style="margin-left: 20px; color: red; font-style: italic; font-size: medium;">Tanggal Mens Terakhir</label>
      <input style="border-radius: 10px; margin-left: 20px; width: 80%; height: 30px; font-style: italic; color: white; background-color: pink; padding-left: 10px; margin-bottom: 20px" type="date" name="meter" value="<?php echo @$data->meter?>">

      <!-- Tambahkan setelah input terakhir -->
<div style="display: flex; justify-content: center; margin-left: 20px; margin-right: 50px; margin-top: 20px;">
  <button type="submit" style="background-color: pink; color: white; border: none; padding: 10px 20px; border-radius: 10px; cursor: pointer; font-size: medium;">
    Simpan
  </button>
  </form>
</div>


    
<div class="bottom-navbar">

<a href="<?= base_url('/') ?>" class="nav-item" id="home">
  <i class="fas fa-home"></i>
</a>
<a href="<?= base_url('edukasi') ?>" class="nav-item" id="search">
  <i class="fas fa-search"></i>

  <a href="<?= base_url('mood') ?>" class="nav-item" id="search">
    <i class="fas fa-receipt"></i>

    <a href="<?= base_url('profil') ?>" class="nav-item2" id="profile">
      <i class="fas fa-user"></i>
    </a>
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

<script>
  const imagePicker = document.getElementById('imagePicker');
  const profileImage = document.getElementById('profileImage');

  imagePicker.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        profileImage.src = e.target.result; // Tampilkan gambar yang dipilih
      };
      reader.readAsDataURL(file); // Membaca file sebagai data URL
    }
  });
</script>

<style>
 
  .container {
    position: relative;
  }

  .profile-photo {
    
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto;
    margin-bottom: 50px;
    border: 2px solid white; /* Tambahkan border putih untuk memperindah */
  }

  .profile-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }





  @media (max-width: 768px) {
    .profile-photo {
      width: 75px;
      height: 75px;
    }
}
</style>

</html>