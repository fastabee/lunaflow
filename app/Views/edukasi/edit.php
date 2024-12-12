<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Styling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        input[type="text"], 
        textarea, 
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus, 
        textarea:focus, 
        input[type="file"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input[type="file"] {
            padding: 5px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<form action="<?php echo base_url('update/web/') . @$data->id ?>" method="post" enctype="multipart/form-data"
class="login__form">
    <label for="judul">Judul</label>
    <input type="text" value="<?php echo @$data->judul?>" name="judul" id="judul" placeholder="Masukkan judul">

    <label for="deskripsi">Deskripsi</label>
    <textarea  name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi"><?php echo @$data->deskripsi?></textarea>

    
    <label for="foto">Foto</label>
    <input  value="<?php echo base_url('public/foto_profil/') . @$data->foto?>"  type="file" name="foto" id="foto">

    <button type="submit">Kirim</button>
</form>


    
</body>
</html>
