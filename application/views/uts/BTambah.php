<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">

        <h2 class="alert alert-info" style="text-align: center">Tambah Data</h2>

        <form action="<?= site_url('controllerb/simpanTambah') ?>" method="post">
                <div class="mb-3">
                    <label for="kolom_jurusan" class="form-label">Kolom_Jurusan</label>
                    <input type="text" name="kolom_jurusan" id="kolom_jurusan" class="form-control" placeholder="masukkan aset anda">    
                </div>
                <div class="mb-3">
                    <label for="kolom_kelas" class="form-label">Kolom_Kelas</label>
                    <input type="text" name="kolom_kelas" id="kolom_kelas" class="form-control" placeholder="masukkan aset anda">    
                </div>
                <div class="mb-3">
                    <label for="kolom_isi" class="form-label">Kolom_Isi</label>
                    <input type="text" name="kolom_isi" id="kolom_isi" class="form-control" placeholder="masukkan aset anda">    
                </div>
                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary"></input>
                <a href="<?= site_url('controllerb/index') ?>" class="btn btn-warning">Kembali</a>
        </form>
    </div>

</body>
</html>