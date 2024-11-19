<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="asset/css/style.css">

    <title>Project UTS</title>
</head>
<body>

    <div class="container-fluid m-0 p-0">
        <!-- Awal Navbar -->
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4 custom-border-bottom pb-3">UTS - Data Kota</h5>
                <hr>
                <a href="index.php" class="btn btn-light">Lihat Data Kota</a>
                <a href="tambahForm.php" class="btn btn-secondary">Tambah Data Kota</a>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- Akhir Navbar -->

        <div class="row p-5 m-0">
            <div class="col-md-12 text-center">
                <h1>Daftar Data Kota</h1>
                <p>List Data Kota yang Telah Terdaftar :</p>
            </div>

            <div class="col-md-12">
                <table class="table table-dark table-hover table-striped table-responsive py-3" id="thisTable">
                    <thead>
                        <tr>
                            <th><center>No.</center></th>
                            <th><center>Nama Kota</center></th>
                            <th><center>Asal Negara</center></th>
                            <th><center>Kawasan / Wilayah</center></th>
                            <th><center>Total Populasi</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'connection.php';
                            
                            $number = 1;
                            $data = mysqli_query($mConnection, "SELECT city.ID, city.Name, country.Name AS 'country', city.District, city.Population FROM city INNER JOIN country ON city.CountryCode = country.Code ORDER BY city.ID");
                            while($item = mysqli_fetch_assoc($data))
                            {
                                $population = number_format($item['Population'],0,',','.');
                        ?>
                        <tr>
                            <td><center><?=$number++?></center></td>
                            <td><?=$item['Name']?></td>
                            <td><?=$item['country']?></td>
                            <td><?=$item['District']?></td>
                            <td><?=$population?></td>
                            <td>
                                <a href="editForm.php?id=<?=$item['ID']?>" class="btn btn-primary">Edit</a>
                                /
                                <a href="delete.php?id=<?=$item['ID']?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#thisTable').DataTable();
        } );
    </script>
</body>
</html>