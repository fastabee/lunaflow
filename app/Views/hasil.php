<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Icon</title>
  <link rel="stylesheet" href="<?= base_url() ?>public/assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
</head>
<body style="background-color: pink;">
  <div class="container">
    <!-- Gambar -->
    <img class="responsive-image" src="https://s3-alpha-sig.figma.com/img/c396/e075/4f27aaa7918a392f1f98df1830665d3a?Expires=1733097600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=dxGY9QQHAiGMaXzsOlXGX--YGAGGo-lAQog7IwPTSS7iHFdQBqXFaF2rbD4pPu2Xr8uEmhbbH4Q68Wyp-EdJZ7vouTd1D4ymX0x3K6T~2Q4xiqNa3UsfAgV4sgGGOo0gQVQG544~OSRVabeXWL~XqM7p2APwbZT4tLdwbmNDB7m06dyVYktfaTVRpl9C4vfjtrrB8Rj5ezIdl2Hqjk3dpPH7YoIsZ7BIUQD4YDlERb7FDd2Buz8-h45vItJN60lnZKr3qc2RLpb4IgjkshDNV7Td6fh4SNb4Q8rXqy-4~TmhvdCskCF2eje-tS1KHVaIPTFZtWuQivCPMKbXb62lSw__" alt="">
    </div>

    <h3 style="padding-left: 20px; padding-top: 10px; margin-bottom: 5px;">Hai, <?php echo @$data->nama?></h3>
    <p style="<?= (isset($hasil->anemia) && $hasil->anemia > 0) ? '' : 'display: none;'  ?> font-style: italic; margin-bottom: 10px;     padding-left: 20px; padding-right: 20px;">Terdapat Indikasi Anemia !</p>
    <p style="<?= (isset($hasil->dysmenorrhea) && $hasil->dysmenorrhea > 0) ? '' : 'display: none;'  ?> font-style: italic; margin-bottom: 10px;     padding-left: 20px; padding-right: 20px;">Terdapat Indikasi dysmenorrhea !</p>
    <div class="card">
  
    <h3>Apakah yang bisa kamu lakukan?</h3>
    <!-- saran    -->
    <div style="<?= (isset($hasil->satu) && $hasil->satu == 1) ? '' : 'display: none;'  ?> font-style: italic; margin-bottom: 10px ">
    Saran : Mengkonsumsi suplemen zat besi sesuai anjuran dokter untuk membantu meningkatkan kadar hemoglobin dalam darah dan 
</div>

<div style="<?= (isset($hasil->dua) && $hasil->dua == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Mengkonsumsi makanan yang kaya zat besi seperti daging merah, hati, sayuran hijau, kacang-kacangan, dan biji-bijian. Zat besi membantu meningkatkan produksi sel darah merah, yang dapat mengurangi gejala pusing dan sakit kepala.
</div>
<div style="<?= (isset($hasil->tiga) && $hasil->tiga == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Mengkonsumsi makanan kaya akan zat besi dengan vitamin c (jeruk, tomat, kiwi), mengkonsumsi vitamin B12 dan asam folat dan juga istirahat yang cukup
</div>
<div style="<?= (isset($hasil->empat) && $hasil->empat == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
- Tidur cukup dan teratur
- Hindari perubahan posisi kepala dan tubuh yang mendadak, apalagi jika melawan gravitasi
- Makan yang teratur, variasikan jenis makanannya agar seimbang nilai gizinya, minum juga yang cukup
- Aktif berolahraga, berelaksasi
- Jangan terlalu rumit memikirkan masalah
- Jangan juga sembarangan minum obat
- Jauhi alkohol dan NAPZA

</div>
<div style="<?= (isset($hasil->lima) && $hasil->lima == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
- Anemia defisiensi besi dapat dicegah dengan mengonsumsi makanan yang kaya akan zat besi, seperti daging merah, ikan, polong-polongan, dan gandum. Selain itu, konsumsi makanan atau minuman yang mengandung vitamin C juga dapat meningkatkan penyerapan zat besi
</div>
<div style="<?= (isset($hasil->enam) && $hasil->enam == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Mengonsumsi makanan atau minuman yang kaya vitamin C, seperti jeruk, stroberi, paprika, dan brokoli, dapat membantu meningkatkan penyerapan zat besi dari makanan.
</div>
<div style="<?= (isset($hasil->tuju) && $hasil->tuju == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Menggunakan kompres hangat pada perut bagian bawah dapat membantu meredakan nyeri haid.
</div>
<div style="<?= (isset($hasil->delapan) && $hasil->delapan == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Mengonsumsi obat pereda nyeri seperti ibuprofen atau paracetamol sesuai anjuran dokter dapat membantu mengurangi nyeri haid dan memungkinkan Anda untuk menjalani aktivitas sehari-hari dengan lebih nyaman.
</div>
<div style="<?= (isset($hasil->sembilan) && $hasil->sembilan == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Mencoba teknik relaksasi seperti meditasi, pernapasan dalam, atau yoga dapat membantu mengurangi stres dan nyeri, serta meredakan gejala tambahan seperti mual, muntah, diare, atau pusing. 
</div>
<div style="<?= (isset($hasil->sepuluh) && $hasil->sepuluh == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Pastikan untuk mendapatkan istirahat yang cukup setiap malam. Tidur yang cukup dapat membantu tubuh pulih dan mengurangi gejala perdarahan haid yang sangat banyak atau berkepanjangan.
</div>
<div style="<?= (isset($hasil->sebelas) && $hasil->sebelas == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Pastikan tubuh untuk mendapat nutrisi dan protein yang cukup serta hindari faktor faktor yang mempengaruhi siklus haid seperti stres, olahraga berlebihan, dan konsumsi obat obatan berlebihan. 
</div>
<div style="<?= (isset($hasil->duabelas) && $hasil->duabelas == 1) ? '' : 'display: none;' ?> font-style: italic; margin-bottom: 10px">
Saran : Disarankan untuk segera berkonsultasi dengan dokter untuk evaluasi lebih lanjut dan mendapatkan pengobatan yang tepat. Riwayat keluarga dengan penyakit rahim seperti kista, mioma, atau endometriosis dapat meningkatkan risiko kondisi serupa, sehingga penting untuk mendapatkan penanganan medis yang tepat.
</div>



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