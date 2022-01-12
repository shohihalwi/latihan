<?php
$_SERVER = "localhost";
$user = "root";
$pass = "";
$database = "dblatihan";

$koneksi = mysqli_connect($_SERVER, $user, $pass, $database) or die(mysqli_error($koneksi));

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <center>
            <h1>CRUD Arkademy</h1>
        </center>
        <!-- card -->
        <div class="card">
            <div class="card-header">
                Form input data
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="tnim" class="form-control" placeholder="Input Nim anda" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="tnama" class="form-control" placeholder="Input nama anda" required>
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <textarea class="form-control" name="talamat" placeholder="input alamat anda"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <select class="form-control" name="tprodi">
                            <option></option>
                            <option value="S1-TI">S1-TI</option>
                            <option value="S1-SI">S1-SI</option>
                            <option value="S1-IK">S1-IK</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="bsimpan">simpan</button>
                    <button type="submit" class="btn btn-danger" name="breset">kosongkan</button>
                </form>
            </div>
        </div>
        <!-- akhir form -->
        <br>
        <!-- awal card table -->
        <div class="card">
            <div class="card-header">
                Form input data
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Program Studi</th>
                    </tr>
                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "select * from tmhs order by id_mhs desc");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['prodi'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <!-- akhir -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>