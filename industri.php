<!doctype html>
<?php
include 'koneksi.php';
$db = new database();
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <title>DINAS PERDAGANGAN KABUPATEN KEDIRI</title>
</head>

<body style="background-color :#FFF">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #6a99ff">
        <a class="navbar-brand" href="#">DINAS PERDAGANGAN KABUPATEN KEDIRI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROFIL
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="about.php">ABOUT</a>
                        <a class="dropdown-item" href="dagang.php">BIDANG PERDAGANGAN</a>
                        <a class="dropdown-item" href="ind.php">BIDANG PERINDUSTRIAN</a>
                        <a class="dropdown-item" href="pasar.php">UPTD PASAR</a>
                        <a class="dropdown-item" href="metro.php">UPTD METROLOGI</a>

                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="industri.php">DATA INDUSTRI</a>
                </li>
            </ul>

        </div>
        <!-- <div class="btn-group dropleft mr-2">
			<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
				  <img src="images/cr.png" width="20">
			</button>
		  <div class="dropdown-menu bg-light">
			<form class="form-inline">
				 <input class="form-control mr-sm-1" type="search" placeholder="Cari disini" aria-label="Search">
			</form>
		  </div>
	</div> -->
        <a href="login.php" class="btn btn-outline-light mr-2">Login</a>
    </nav><br>

    <!-- jumbotron dan tabel tampil  -->
    <div class="jumbotron pr-5 pl-10" style="background-color :#e4f2f2">
        <center>
            <h3>DATA INDUSTRI </h3>
        </center><br>
        <div class="container">
            <table id="listdata" class="table table-striped table-bordered" style="color: black;">
                <thead>
                    <tr>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Nama Industri</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Skala Pendapatan</th>
                        <th scope="col">Skala Investasi</th>
                        <th scope="col">Tenaga Kerja</th>
                        <th scope="col">Alamat Industri</th>
                        <th scope="col">Sosial Media</th>
                        <th scope="col">Kecamatan</th>
                    </tr>
                </thead>

                <!-- Tampil -->
                <!-- disini butuh tbody -->
		    <tbody>
    <?php
					foreach ($db->tampil_data(['data']) as $data) { ?>
    <tr>
        <td> <?php echo $data['nama']; ?> </td>
        <td> <?php echo $data['namaind']; ?> </td>
        <td> <?php echo $data['namaproduk']; ?> </td>
        <td> <?php echo $data['tahun']; ?> </td>
        <td> <?php echo $data['pendthn']; ?> </td>
        <td> <?php echo $data['inthn']; ?> </td>
        <td> <?php echo $data['pekerja']; ?> </td>
        <td> <?php echo $data['alamatind']; ?> </td>
        <td> <?php echo $data['sosmed']; ?> </td>
        <td> <?php echo $data['namakec']; ?> </td>
    </tr>
    <?php } ?>
</tbody>
            </table>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#listdata').DataTable();
    });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
