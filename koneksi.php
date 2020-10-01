<?php
class database
{
    // disini butuh host
    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->pass, $this->db);
        if ($this->koneksi->connect_errno) {
            echo "Database Tidak Ada....!";
            exit;
        }
    }

    public function register($username, $password, $nama)
    {
        $insert = mysqli_query($this->koneksi, "insert into admin values ('','$username','$password','$nama')");
        return $insert;
    }

    public function login($username, $password, $remember)
    {
        $query = mysqli_query($this->koneksi, "select * from admin where username='$username' ");
        $data_user = $query->fetch_array();

        if (password_verify($password, $data_user['password'])) {

            if ($remember) {
                setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = true;
            return true;
        } else {
            header("location:login.php?pesan=gagal");
        }
    }

    public function relogin($username)
    {
        $query = mysqli_query($this->koneksi, "select * from admin where username='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = true;
    }

    public function tampil_data($data)
    {

        $data = "SELECT ind.`nib`, pm.`nama`, ind.`namaind`, ind.`namaproduk`,  ind.`tahun`, ind.`pendthn`,ind.`inthn`,ind.`pekerja`,  ind.`alamatind`, pm.`sosmed`,pm.`telp`, kec.`namakec`
        FROM industri ind, pemilik pm, kecamatan kec
        WHERE ind.`nib` = pm.`nib`
        AND ind.`id_kec` = kec.`id_kec`";
        $hasil = $this->koneksi->query($data);
        while ($d = mysqli_fetch_array($hasil)) {
            $result[] = $d;
        }
        return $result;
    }

    public function tampil_kec()
    {
        $data = "SELECT * FROM kecamatan ORDER BY namakec ASC";
        $hasil = $this->koneksi->query($data);
        while ($d = mysqli_fetch_array($hasil)) {
            $result[] = $d;
        }
        return $result;
    }

    public function tampil_data1()
    {
        $data = "SELECT pm.`nama`, ind.`namaind`, ind.`namaproduk`,ind.`tahun`,ind.`pendthn`,ind.`inthn`, ind.`pekerja`, ind.`alamatind`, pm.`sosmed`, kec.`namakec`
        FROM industri ind, pemilik pm, kecamatan kec
        WHERE ind.`nib` = pm.`nib`
        AND ind.`id_kec` = kec.`id_kec` ORDER BY namakec ASC ";
        $hasil = $this->koneksi->query($data);
        while ($d = mysqli_fetch_array($hasil)) {
            $result[] = $d;
        }
        return $result;
    }

    // INSERT DATA
    public function input(
        $nib,
        $namaind,
        $namaproduk,
        $tahun,
        $pendthn,
        $inthn,
        $pekerja,
        $alamatind,
        $nik,
        $nama,
        $email,
        $alamat,
        $sosmed,
        $telp,
        $inputkec
    ) {

        $simpan1 = "insert into industri(nib, namaind, namaproduk, tahun, pendthn ,inthn, pekerja, alamatind, id_kec) values('$nib', '$namaind', '$namaproduk', '$tahun', '$pendthn','$inthn', '$pekerja', '$alamatind', '$inputkec');";
        $simpan2 = "insert into pemilik(nik, nama, email, alamat, sosmed,telp, nib) values('$nik', '$nama', '$email', '$alamat', '$sosmed','$telp', '$nib');";

        $hasil = $this->koneksi->query($simpan1);
        $hasil = $this->koneksi->query($simpan2);
    }

    // DELETE DATA
    public function hps_ind($nib)
    {
        $simpan = "delete from industri where nib = '$nib'";
        $hasil = $this->koneksi->query($simpan);
    }
    public function hps_pm($nik)
    {
        $simpan = "delete from pemilik where nik = '$nik'";
        $hasil = $this->koneksi->query($simpan);
    }

    //edit
    public function edit($nib)
    {
        $data = "SELECT ind.`nib`, pm.`nik`, pm.`nama`, ind.`namaind`, ind.`namaproduk`, ind.`tahun`,  ind.`pendthn`, ind.`inthn`, ind.`pekerja`,
    ind.`alamatind`, pm.`alamat`, pm.`email`, pm.`sosmed`,pm.`telp`, kec.`namakec`
    FROM industri ind, pemilik pm, kecamatan kec
    WHERE ind.`nib` = pm.`nib`
    AND ind.`id_kec` = kec.`id_kec`
    AND ind.`nib` = $nib AND pm.`nib` = $nib";
        $hasil = $this->koneksi->query($data);
        while ($d = mysqli_fetch_array($hasil)) {
            $result[] = $d;
        }
        return $result;
    }

    //update
    public function update(
        $nib,
        $nik,
        $nama,
        $namaind,
        $namaproduk,
        $tahun,
        $pendthn,
        $inthn,
        $pekerja,
        $alamatind,
        $email,
        $alamat,
        $sosmed,
        $telp,
        $inputkec
    ) {

        $simpan1 = "UPDATE industri SET namaind='$namaind', namaproduk='$namaproduk', tahun = '$tahun', pendthn = '$pendthn', inthn = '$inthn', pekerja = '$pekerja', alamatind = '$alamatind', id_kec ='$inputkec' WHERE nib='$nib'";
        $simpan2 = "UPDATE pemilik SET nik = '$nik', nama = '$nama', email = '$email', alamat = '$alamat', sosmed = '$sosmed', telp = '$telp' WHERE nib='$nib'";

        $hasil1 = $this->koneksi->query($simpan1);
        $hasil2 = $this->koneksi->query($simpan2);
    }

    // function cari($kec,$thn){
    //     $data = mysql_query("SELECT ind.`nib`, pm.`nama`, ind.`namaind`, ind.`namaproduk`,  ind.`tahun`,  ind.`pendthn`, ind.`inthn`, ind.`pekerja`,
    //         ind.`alamatind`, pm.`sosmed`,pm.`telp`, kec.`namakec`
    //         FROM industri ind, pemilik pm, kecamatan kec
    //         WHERE ind.`nib` = pm.`nib`
    //         AND ind.`id_kec` = kec.`id_kec` where ind.id_kec ='$kec' and ind.tahun='$thn' ");

    //     $hasil = $this->koneksi->query($data);
    //     while ($d = mysqli_fetch_array($hasil))
    //     {
    //         $result[] = $d;
    //     }
    //     return $result;
    // }
    // <?php
    //         if(isset($_GET['cari'])){
    //             $cari = $_GET['cari'];
    //             $data = mysql_query("select * from mhs where nama like '%".$cari."%'");
    //         }else{
    //             $data = mysql_query("select * from mhs");
    //         }
    //         $no = 1;
    //         while($d = mysql_fetch_array($data)){
}