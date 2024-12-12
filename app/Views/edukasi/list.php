<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons button {
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .edit {
            background-color: #28a745;
            color: #fff;
        }

        .edit:hover {
            background-color: #218838;
        }

        .delete {
            background-color: #dc3545;
            color: #fff;
        }

        .delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<h2>Tabel Data</h2>
<a href="<?=base_url('edukasiinput') ?>"><button class="edit">Tambah</button></a>

<table>
    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    
    <?php foreach ($data->getResult() as $row): ?>  

        <tr>
            <td><?= $row->judul?></td>
            <td><?= $row->deskripsi?></td>
            <td>
                <img src="<?=base_url('public/edukasi/') . $row->foto  ?>" alt="Preview Foto 1">
            </td>
            <td>
                <div class="action-buttons">
                    <a href="<?= base_url('edukasiedit/') . $row->id?>"><button class="edit">Edit</button></a>
                    <a href="<?= base_url('edukasidelete/') . $row->id?>"><button class="delete">Delete</button></a>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
      
     
    </tbody>
</table>

</body>
</html>
