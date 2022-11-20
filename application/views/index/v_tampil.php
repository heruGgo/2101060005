<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Tabel Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-md">
        <h2 class="alert alert-info">Data Mahasiswa</h2>

        <a href="<?= site_url('kelascontroller/tambah'); ?>" class="btn btn-success">Tambah</a><br><br>

        <table class="table table-bordered">
            <thead>
                <th>Id</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>Kelas</th>
                <th>Isi</th>
            </thead>
            <tbody>
                <?php $number = 1; ?>
                <?php foreach($isi as $item) :?>
                <tr>
                    <td><?php echo $number++; ?></td>
                    <td><?php echo $item->fakultas; ?></td>
                    <td><?php echo $item->prodi; ?></td>
                    <td><?php echo $item->kelas; ?></td>
                    <td><?php echo $item->isi; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>