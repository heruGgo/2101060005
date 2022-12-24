<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Tabel Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-md">
        <h2 class="alert alert-info">Data Aset</h2>

        <a href="<?php echo site_url('komponen005/tambah'); ?>" class="mb-2 float-end btn btn-primary">Tambah Data</a><br><br>

        <table class="table table-bordered" border=1 cellpadding=10 cellspacing=0>
            <thead>
                <th>Id</th>
                <th>Merek</th>
                <th>Kapasitas</th>
                <th>Harga</th>
                <th>Jenis</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $nomor = 1;?>
                <?php foreach($komponen as $item) :?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $item->merek_005; ?></td>
                    <td><?php echo $item->kapasitas_005; ?></td>
                    <td><?php echo $item->harga_005; ?></td>
                    <td><?php echo $item->jenis_005; ?></td>
                    <td>
                        <a href="<?= site_url('komponen005/edit/' . $item->id_komponen) ?>" class="btn btn-warning">Edit</a> |
                        <a href="<?= site_url('komponen005/delete/' . $item->id_komponen) ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>