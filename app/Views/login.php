<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">

</head>
<body background="https://i.pinimg.com/736x/15/74/9c/15749cd126272b95f047ff8c1b0e9c81.jpg">
    <center>
        <img style="width: 50%;"
        src="https://s3-alpha-sig.figma.com/img/22f5/fd7b/e7c67b60556a67463c5d5e92983b6941?Expires=1733702400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=bnY2woJHnpsTmyywEEwAtU~6Zk8hhMs8RGiV9gQ7DdqLayGLCL5J3OPM2hWbdRjorXZ2xvFt0DeWCKYuHWjr1LGy5WCjy6caFRx5LxTCuCEBjint6YaKb9hlyYzjaaj4rxiyi-Ar7xOo4bhuiNpxhU455oBUu3xfif14kHYsUCYITHfICnI3~BscL-pClHktdqijPYgw2mQZsu8QdjFu4g9lMVvP7qqQ4LLPZzOF6jqXv0uO0PHPq7ou9PzMgI2YrNX9VoJU2l9J18coE2ripQQQ8P3B4OhqTBFITodynlRszcRQe0zoUjVZOaAYlOat2q~9rfRs0Ao7DkXmCccdRw__" alt="">
    <p style="color: pink; font-style: italic; margin-top: -10px;  z-index: 10;">LunaFlow</p>
    <form action="<?= base_url('login/user') ?>" method="post" enctype="multipart/form-data"
    class="login__form">
    <p style="margin-top: 20%; font-size: small; text-align: left; padding-left: 10%;">Nomor telepon</p>
    <input type="number" name="nomor" placeholder="masukan nomor telepon" style="  border-radius: 10px; width: 80%; height: 30px; border-color: pink; text-align: center;"></input>
    <p style="margin-top: 10%; font-size: small; text-align: left; padding-left: 10%;">Password</p>
    <input type="password" name="password" placeholder="*************" style="  border-radius: 10px; width: 80%; height: 30px; border-color: pink; text-align: center;"></input><br>
    <button type="submit" style="margin-top: 10%; font-style: italic; background-color: pink; color: white; border-radius: 10px; width: 40%; height: 30px; outline-color: white; border-color: white;" >Masuk</button><br>
    </form>
    <br>
    <a href="<?= base_url('registrasi')?>">belum punya akun? Registrasi</a>

    
</center>


<!-- Modal -->
<?php if (session()->getFlashdata('error')): ?>
<div id="error-modal" class="modal-overlay">
    <div class="modal-content">
        <h2 class="modal-title">Error</h2>
        <p><?= session()->getFlashdata('error') ?></p>
        <button onclick="closeModal()" class="modal-button">Tutup</button>
    </div>
</div>
<?php endif; ?>


    
</body>

<style>
/* Modal Overlay */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Background semi-transparan */
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    padding-left: 10px;
    padding-right: 10px;
}

/* Modal Content */
.modal-content {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 70%; /* Default ukuran modal untuk mobile */
    max-width: 400px; /* Batas maksimum ukuran modal */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    text-align: center;
}

/* Modal Title */
.modal-title {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

/* Modal Button */
.modal-button {
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #f44336; /* Warna merah */
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
}

.modal-button:hover {
    background-color: #d32f2f; /* Warna merah lebih gelap */
}

/* Responsive Design untuk Perangkat yang Lebih Besar */
@media (min-width: 768px) {
    .modal-content {
        width: 60%; /* Lebar modal lebih besar di layar medium */
    }
}

@media (min-width: 1024px) {
    .modal-content {
        width: 40%; /* Lebar modal lebih kecil di layar besar */
    }
}


</style>

<script>
    function closeModal() {
        document.getElementById('error-modal').style.display = 'none';
    }
</script>

</html>