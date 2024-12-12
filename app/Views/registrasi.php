<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body background="https://i.pinimg.com/736x/15/74/9c/15749cd126272b95f047ff8c1b0e9c81.jpg">
    <center>
       <p  style="font-style: italic; font-weight: bold; padding-top: 5%;">Registrasi Akun</p>
    <form action="<?= base_url('insert/register') ?>" method="post" enctype="multipart/form-data"
    class="login__form">
    <p style="margin-top: 10%; font-size: small; text-align: left; padding-left: 10%;">Nama</p>
    <input type="text" name="nama" placeholder="masukan nama" style="  border-radius: 10px; width: 80%; height: 30px; border-color: pink; text-align: center;"></input>
    <p style="margin-top: 10%; font-size: small; text-align: left; padding-left: 10%;">Username</p>
    <input type="text" name="username" placeholder="masukan username" style="  border-radius: 10px; width: 80%; height: 30px; border-color: pink; text-align: center;"></input>
    <p style="margin-top: 10%; font-size: small; text-align: left; padding-left: 10%;">Email</p>
    <input type="email" name="email" placeholder="masukan email" style="  border-radius: 10px; width: 80%; height: 30px; border-color: pink; text-align: center;"></input>
    <p style="margin-top: 10%; font-size: small; text-align: left; padding-left: 10%;">Nomor telepon</p>
    <input type="number" name="nomor" placeholder="masukan nomor telepon" style="  border-radius: 10px; width: 80%; height: 30px; border-color: pink; text-align: center;"></input>
    <p style="margin-top: 10%; font-size: small; text-align: left; padding-left: 10%;">Password</p>
    <input type="password" name="password" placeholder="*************" style="  border-radius: 10px; width: 80%; height: 30px; border-color: pink; text-align: center;"></input><br>
    <button  type="submit" style="margin-top: 10%; font-style: italic; background-color: pink; color: white; border-radius: 10px; width: 40%; height: 30px; outline-color: white; border-color: white;" >Masuk</button><br>
    <br>
    <a href="<?= base_url('login')?>">sudah punya akun? login</a>
    </form>
    
</center>
    
</body>
</html>