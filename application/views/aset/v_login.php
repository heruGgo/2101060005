<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h2>Login</h2>
        <hr>

        <div class="row">
            <div class="col-4">
                <div class="card card-body">
                    <?php
                        if(($this->session->flashdata('pesan'))){
                            echo"<div class='alert alert-danger'>";
                            echo $this->session->flashdata('pesan');
                            echo "</div>";
                        }
                    ?>

                    <form action="<?= site_url('login/proses_login') ?>" method="post">
                        <div class="mb-3">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="txtusername">
                        </div>

                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="txtpassword">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>