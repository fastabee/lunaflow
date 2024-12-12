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
    <img class="responsive-image" src="https://s3-alpha-sig.figma.com/img/617c/fe17/8ef669140428e26f9ae4b200f8c3ed54?Expires=1733097600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=FF1bi7bpCx2A4v6ynU4zUTUpalb-LfX3GAXIR72Zoh0Ud-TT6jb2fte3NYTnBh4K7inyv40~emLEwu0uOlwJwN-dtZOqiUz6a8fYXZKLcGwniisQJ9EKZ2BCh4ZJ1SN9tIxgunzcUC5ozH5EVXiKX3W7xyb4eJHcEYcQZY~lJnIdyQ7cIrau3nyUMvzPtnHiekP2k7MrieK2CtLbcwXQvDNmyNP5wmRMxEcg1mNSWRDdDgqTrgCTpsD8~p2o9WqVi4T2yaAarufJwWDBZdkkzuDby3SRjmECeSR5Lp-GGALcDUMVuZla899a5CabtJ2CQ95Lw7XoAfBvZ0ISPwQ-1w__" alt="">

    <div class="text-overlay">
    <div class="profile-photo">
        <img src="<?php echo base_url('public/foto_profil/') . @$data->foto;?>" alt="Foto Profil">
      </div>
      <h2>Hai, <?php echo @$data->nama ?>
    </h2>
      <p><?php echo @$data->email ?></p>
    </div>

    <h3 style="padding-left: 10px; padding-top: 10px;">Aliran Menstruasi</h2>
    <p style="padding-left: 10px; padding-top: 5px;">Perkiraan aliran harian rata rata</p>
    
    <form action="<?= base_url('insert/mood') ?>" method="post" enctype="multipart/form-data"
    class="login__form">

    <input type="text" name="id" hidden value="<?php echo @$data->id?>"> 

    <div class="radio-group">
  <label class="radio-container">
    <input type="radio" name="takaran" value="sedikit">
    <img src="https://s3-alpha-sig.figma.com/img/c5b1/d98f/b919eab9fae430a22b23cfbe2cc93987?Expires=1733097600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=B3DhbgRsPn72l8LbWW8tN09bs0wHZpHmnx9xgl7WYhkw4yx-JjckFNsYvRp9M13RECY6LaxjE2DnlMtR1bD42G5dKoRV8K44fH1hCafeUxX6fUOuvCTplX5U3Haj~lV3cgyuEyMNrJXxHlxbdH7bL4VsUjzPqJMQ4jDNj6xMUobE9kLHQq6NUrZxQZNzmt6-YVkWOPixJ2j-rikYTHjxXCBmNIbQDWOSslMG5g8Cv21KmX1NY1OEfSWI-bEjvFtb0GkZJonpSKBjEQDRaj5yFgVuVsYH9dFm-ljUH4Rk7ub0eD9Zv7AWiaXaMIUV44KN6oXswEdZMayr0BsWtH7QAA__" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Sedikit</span>
  </label>
  <label class="radio-container">
    <input type="radio" name="takaran" value="sedang">
    <img src="https://s3-alpha-sig.figma.com/img/0668/6316/bb0362dcc1d9386c07ec152c196599bf?Expires=1733097600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=e0Aau9Qv6yxcoX~jy7koCwgRC5YOpRuw3Jq1hwQa5kWQn2S6XA0kNI6yulfzAuzfSZqqWyCqWOlF1Vrrvf08YCrG9aUfAXtT1U3oOGd72bym8ercH4I1nvoh1850NmoWmVl4Jy~9qmhYARI04ouzw6JXqv-4p4qs60bU6VKJLqWsNJgTPrI~pgZ7qUjrqvMNM65Ck2Ocyuk~zPwBdEbOBGZQlurR9JfgcDLvXmdOZqZBLZ9MLYtIEyRSnFvFpiW5c-hdg1tX8F0BqctVV4pvQn7OQrxcwXz~x98u33vdOY6h-e6LJoromGJbVpZ0kwnK0Xzz3i0m9EW~1JPUg437ug__" alt="Icon 2" class="radio-icon">
    <span class="radio-label">Sedang</span>
  </label>
  <label class="radio-container">
    <input type="radio" name="takaran" value="banyak">
    <img src="https://s3-alpha-sig.figma.com/img/2fdb/745f/e24d39da211b803d107123815e8d0623?Expires=1733097600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=JJ2pWkXV940KpBNH-EYU9gTFeLyQZvcbs~VnmfikO9n~vMNGuwTXLwTALf91q0Cni4oNlkTQi58p2bdDt6Fr6HXqt6VHEx1lyzv7CE9xQrBX7UDFndGjLZpNRlajli0lmQ9cvaRg2ozO7zhmnIhUpOT4YItpSBX2SJTg1uBsIKKyA~fJ89XezZ6jTbOPD07of-73F8EJxTm9G8N-wdSYCtkNhtR-aQ0u30BxEc8Nqn~-UM7d0Tj5z4R3NUP6IgtlbE5TI4cjPNw9o30mkpxsU6--O0Qr8LznIr3hRaIrTXx4thy9WTwpNhJsh48F19ccWumgLO-t~bjjT-Ya6Jm2Pw__" alt="Icon 3" class="radio-icon">
    <span class="radio-label">Banyak</span>
  </label>
</div>


<div class="radio-group">
  <label class="radio-container">
    <input type="radio" name="takaran" value="menggumpal">
    <img src="https://s3-alpha-sig.figma.com/img/9929/cb94/574abf65b1973f9690ba0cf6d656e56d?Expires=1733097600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=MwkZ~J2wK6OPVP~8RV-sa9qTPWGlWUvYT2--NS09AIqr44fKNizB9b6g~1IsvA9-c2knqIdjX5FbtR-6gkC2JGJYPwczLoI-G16Pm4HSs0Li26yFhYWl4AIa3r68sm8dj-uS5ov39yA5~bYVnMsv5yKIjHAdhZOieSinor2rnBbNHLtHyPn8LAOZWK0yGuubBZ5WuQhMtcGidgg1CLQ~uehfFl-9EY0bjtnDAT9k6YdL0jEq22l5LpYiN6p1Z5xn-rJdHChXcDsHoUkWbYLufLKQpz0LKYeM1iI-1Br45PzIJsGt1OcJKOmazDEr8~YMvliV7aOyXnAx72v2C1Onhw__" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Menggumpal</span>
  </label>
</div>

<h3 style="padding-left: 10px; padding-top: 20px;">Mood</h2>

<div class="radio-group">
  <label class="radio-container">
    <input type="radio" name="mood" value="tenang">
    <img src="https://w7.pngwing.com/pngs/1/863/png-transparent-yellow-emoji-illustration-smiley-emoticon-wink-whatsapp-smile-emoji-miscellaneous-face-internet-forum-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Tenang</span>
  </label>
  <label class="radio-container">
    <input type="radio" name="mood" value="senang">
    <img src="https://w7.pngwing.com/pngs/698/250/png-transparent-smiley-emoji-blushing-emoji-smiley-face-smile-face-smiley-sticker-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Senang</span>
  </label>
 <label class="radio-container">
    <input type="radio" name="mood" value="energik">
    <img src="https://w7.pngwing.com/pngs/39/416/png-transparent-emoticon-illustration-iphone-world-emoji-day-apple-color-emoji-emoji-electronics-heart-smiley-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Energik</span>
  </label>
</div>

<div class="radio-group">
  <label class="radio-container">
    <input type="radio" name="mood" value="mood_swing">
    <img src="https://w7.pngwing.com/pngs/866/54/png-transparent-emoji-sadness-emoticon-smiley-sad-emoji-crying-imoji-face-sticker-desktop-wallpaper-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Mood Swing</span>
  </label>
  <label class="radio-container">
    <input type="radio" name="mood" value="frisky">
    <img src="https://w7.pngwing.com/pngs/232/131/png-transparent-iphone-emoji-apple-ios-11-emojis-lol-emoji-electronics-smiley-apple-color-emoji-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Frisky</span>
  </label>
 <label class="radio-container">
    <input type="radio" name="mood" value="kesal">
    <img src="https://w7.pngwing.com/pngs/968/809/png-transparent-yellow-emoticon-iphone-emoji-anger-smiley-emoticon-angry-emoji-electronics-face-computer-wallpaper-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Kesal</span>
  </label>
</div>

<div class="radio-group">
  <label class="radio-container">
    <input type="radio" name="mood" value="sedih">
    <img src="https://w7.pngwing.com/pngs/133/456/png-transparent-crying-emoji-illustration-face-with-tears-of-joy-emoji-crying-iphone-crying-emoji-smiley-sticker-emoticon-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Sedih</span>
  </label>
  <label class="radio-container">
    <input type="radio" name="mood" value="cemas">
    <img src="https://w7.pngwing.com/pngs/938/417/png-transparent-emoji-emoticon-smiley-sticker-emoji-face-head-thumb-signal-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Cemas</span>
  </label>
 <label class="radio-container">
    <input type="radio" name="mood" value="depresi">
    <img src="https://w7.pngwing.com/pngs/376/192/png-transparent-surprise-emoji-emoji-domain-apple-color-emoji-world-emoji-day-emoji-food-smiley-apple-watch-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Depresi</span>
  </label>
</div>

<div class="radio-group">
  <label class="radio-container">
    <input type="radio" name="mood" value="bermasalah">
    <img src="https://w7.pngwing.com/pngs/222/140/png-transparent-sad-emoticon-iphone-emoji-sadness-smiley-emoticon-emoji-face-electronics-face-emoji-face-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Bermasalah</span>
  </label>
  <label class="radio-container">
    <input type="radio" name="mood" value="bingung">
    <img src="https://w7.pngwing.com/pngs/702/840/png-transparent-emoji-emoji-emoticon-smiley-emoji-face-smiley-desktop-wallpaper-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Bingung</span>
  </label>
 <label class="radio-container">
    <input type="radio" name="mood" value="apatis">
    <img src="https://w7.pngwing.com/pngs/856/143/png-transparent-yellow-emoji-iphone-emoji-emoticon-smiley-emoji-face-electronics-face-computer-wallpaper-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Apatis</span>
  </label>
</div>

<div class="radio-group">
  <label class="radio-container">
    <input type="radio" name="mood" value="obsesif">
    <img src="https://w7.pngwing.com/pngs/412/388/png-transparent-in-love-emoji-emoji-heart-emoticon-whatsapp-smiley-emoji-love-sticker-art-emoji-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Obsesif</span>
  </label>
  <label class="radio-container">
    <input type="radio" name="mood" value="lelah">
    <img src="https://w7.pngwing.com/pngs/1018/609/png-transparent-sleepy-emoji-illustration-emoji-domain-iphone-sleep-face-smiley-sleep-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">Lelah</span>
  </label>
 <label class="radio-container">
    <input type="radio" name="mood" value="kritik_diri">
    <img src="https://w7.pngwing.com/pngs/856/942/png-transparent-emoji-iphone-emoticon-profanity-emoji-smiley-social-media-apple-color-emoji-thumbnail.png" alt="Icon 1" class="radio-icon">
    <span class="radio-label">kritik diri</span>
  </label>
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
    <script src="<?= base_url() ?>/public/assets/script.js"></script>
</body>
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
    top: 10%;
    left: 30%;
    /* Menempatkan teks di tengah secara vertikal */
    text-align: center;
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
    color: white;
  }

  .text-overlay p {
    font-size: 16px;
    /* Ukuran font deskripsi */
    margin-top: 10px;
    /* Jarak antara judul dan deskripsi */
    font-weight: normal;
    color: white;
  }

  .profile-photo {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto;
    margin-bottom: 10px;
    border: 2px solid white; /* Tambahkan border putih untuk memperindah */
  }

  .profile-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

 /* Group container untuk radio button */
.radio-group {
  display: flex;
  padding-left: 10%;
  justify-content: left;
  align-items: center;
  margin-top: 10px;
  gap: 10px; /* Jarak antar container */
}

/* Container untuk radio button */
.radio-container {
  display: flex;
  align-items: center;
  padding: 5px;
  border: 2px solid #ccc;
  border-radius: 8px;
  background-color: #f9f9f9;
  cursor: pointer;
  transition: all 0.3s ease;
  gap: 10px; /* Jarak antara gambar dan teks */
}

/* Hover effect */
.radio-container:hover {
  border-color: #007bff;
  background-color: #eaf4ff;
}

/* Radio button disembunyikan */
.radio-container input[type="radio"] {
  display: none;
}

/* Gambar icon */
.radio-icon {
  width: 24px; /* Ukuran default gambar */
  height: 24px;
  object-fit: cover;
  border-radius: 50%;
}

/* Label teks */
.radio-label {
  font-size: 16px; /* Ukuran default teks */
  color: #333;
}


/* Gaya saat radio button dipilih */
.radio-container input[type="radio"]:checked + .radio-icon {
  border: 2px solid #007bff; /* Tambahkan border pada gambar saat dipilih */
}

.radio-container input[type="radio"]:checked + .radio-icon + .radio-label {
  font-weight: bold;
  color: #007bff;
}



  @media (max-width: 768px) {
    .profile-photo {
      width: 75px;
      height: 75px;
    }

    .radio-group {
    flex-direction: row; /* Ubah dari horizontal ke vertikal */
    gap: 5px; /* Jarak antar radio button */
  }

  .radio-container {
    justify-content: flex-start; /* Pastikan konten rata kiri */
    padding: 4px; /* Kurangi padding agar lebih hemat ruang */
  }

  .radio-icon {
    width: 20px; /* Kurangi ukuran gambar */
    height: 20px;
  }

  .radio-label {
    font-size: 14px; /* Kurangi ukuran teks */
  }
}

</style>

</html>