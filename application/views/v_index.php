<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemrograman Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-md">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tugas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tambah Data</a>
                        </li>
                    </ul>
                </div>
                <span class="navbar-text">
                    Herkulianus Mboja Gago
                </span>
            </div>
        </nav>

        <h1 class="alert alert-info" style="text-align: center">Herkulianus Mboja Gago/2101060005</h1>
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Data Mahasiswa</p>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="10">
                        <thead>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Herkulianus Mboja Gago</td>
                                <td>2101060005</td>
                                <td>Karang Jero</td>
                                <td><input type="submit" value="Edit" class="btn btn-warning"> <input type="reset" value="Delete" class="btn btn-danger"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Herkulianus Mboja Gago</td>
                                <td>2101060005</td>
                                <td>Karang Jero</td>
                                <td><input type="submit" value="Edit" class="btn btn-warning"> <input type="reset" value="Delete" class="btn btn-danger"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>