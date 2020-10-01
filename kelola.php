<!doctype html>
<!-- disini butuh koneksi -->

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <title>DINAS PERDAGANGAN KABUPATEN KEDIRI</title>
</head>

<body style="background-color :#e4f2f2">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #6a99ff">
        <a class="navbar-brand" href="admin.php">DINAS PERDAGANGAN KABUPATEN KEDIRI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dataadm.php">DATA INDUSTRI</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kelola.php">KELOLA DATA</a>
                </li>
            </ul>

            <div class="btn-group dropleft mr-2">
                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="images/adm.png" width="20">
                </button>
                <div class="dropdown-menu" aria-labelledby="DropdownMenuLink">
                    <a class="dropdown-item" href="register.php">REGISTER</a>
                    <a class="dropdown-item" href="logout.php">LOG OUT</a>

                </div>
            </div>
    </nav><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h4>INPUT DATA INDUSTRI</h4>
                </center><br>
                <form action="proses.php?aksi=tambah" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputnib">NIB</label>
                            <input type="text" name="nib" class="form-control" id="inputnib" placeholder="NIB">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputnk">NIK</label>
                            <input type="text" name="nik" class="form-control" id="inputnk" placeholder="nik">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputnp">Nama Pemilik</label>
                            <input type="text" name="nama" class="form-control" id="inputnp" placeholder="Nama Pemilik">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputnamaind">Nama Industri</label>
                            <input type="text" name="namaind" class="form-control" id="inputnamaind"
                                placeholder="Nama Industri">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputnamaprod">Nama Produk</label>
                            <input type="text" name="namaproduk" class="form-control" id="inputnamaprod"
                                placeholder="Nama Produk">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputhn">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="inputhn" placeholder="Tahun">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputmo">Skala Pendapatan</label>
                            <select class="form-control" name="pendthn" id="inputmo">
                                <option value="Mikro">>=300.000.000</option>
                                <option value="Kecil">300.000.000 >= 2.500.000.000</option>
                                <option value="Menengah">2.500.000.000 >= 50.000.000.000</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputinv">Skala Investasi</label>
                            <select class="form-control" name="inthn" id="inputinv">
                                <option value="1.000.000.000">
                                    < 1.000.000.000</option>
                                <option value="1.000.000.000 - 15.000.000.000">1.000.000.000 - 15.000.000.000
                                </option>
                                <option value="15.000.000.000"> 15.000.000.000</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputpekerja">Tenaga Kerja</label>
                            <select class="form-control" name="pekerja" id="inputpekerja">
                                <option value="1-19"> 1 - 19 Orang</option>
                                <option value=">=20"> >= 20 </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputalind">Alamat Industri</label>
                            <input type="text" name="alamatind" class="form-control" id="inputalind"
                                placeholder="Alamat Industri">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputal">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="inputal" placeholder="Alamat">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputem">Email</label>
                            <input type="text" name="email" class="form-control" id="inputem" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputsos">Sosial Media</label>
                            <input type="text" name="sosmed" class="form-control" id="inputsos"
                                placeholder="Sosial Media">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputtel">Telepon</label>
                            <input type="text" name="telp" class="form-control" id="inputtel" placeholder="Telepon">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputkec">Kecamatan</label>
                            <select name="inputkec" class="form-control" id="inputkec">
                                <?php
								foreach ($db->tampil_kec() as $data) {
								?>
                                <option value="<?php echo $data['id_kec']; ?>"> <?php echo $data['namakec']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-secondary ">
                </form>
            </div>
        </div>
    </div>
    </div><br>


    <!-- <footer id="sticky-footer" class="py-1  text-black-15" style="background-color: #6a99ff">
    <div class="container text-center">
      <h6>Copyright All Rights Reserve by SRIKANDI :) :*</h6>
    </div>
  </footer> -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>