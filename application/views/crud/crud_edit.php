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
            <h2 class="alert alert-info">Edit Data</h2>
    
            <form action="<?= site_url('komponen005/proses_edit') ?>" method="post">
                <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input type="hidden" name="txtid" value="<?= $isi->id_komponen ?>">
                    <input type="text" name="merek" id="merek" class="form-control" placeholder="masukkan merek" value="<?= $isi->merek_005 ?>">    
                </div>
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" name="kapasitas" id="kapasitas" class="form-control" placeholder="masukkan kapasitas" value="<?= $isi->kapasitas_005 ?>">    
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control" placeholder="masukkan harga" value="<?= $isi->harga_005 ?>">    
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis</label>
                    <input type="number" name="jenis" id="jenis" class="form-control" placeholder="masukkan jenis" value="<?= $isi->jenis_005 ?>">    
                </div>
                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary"></input>
                <a href="<?= site_url('komponen005/tampilkan') ?>" class="btn btn-warning">Kembali</a>
            </form>
           
        </div>
    
    </body>
</html>