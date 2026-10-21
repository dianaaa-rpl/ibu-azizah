<?php

include 'layout/header.php';

$title = 'Detail Mahasiswa';

//mengambil id mahasiswa dari url
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

//menampilkan data mahasiswa
$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];

?>

<div class="container mt-5">
    <h1>Data <?= $mahasiswa['nama']; ?></h1>
    
    <table class="table table-bordered table-striped mt-3">
        
<tr>
    <td>Nama</td>
    <td>: <?= $mahasiswa['nama']; ?></td>
</tr>

<tr>
    <td>Program Studi</td>
    <td>: <?= $mahasiswa['prodi']; ?></td>
</tr

<tr>
    <td>Jenis Kelamin</td>
    <td>: <?= $mahasiswa['jk']; ?></td>
</tr>

<tr>
    <td>Telepon</td>
    <td>: <?= $mahasiswa['telepon']; ?></td>
</tr>

<tr>
    <td>Email</td>
    <td>: <?= $mahasiswa['email']; ?></td>
</tr>    

<tr>
    <td>Foto</td>
    <td><img src="assets/img/foto.jpeg" alt="foto" width="50%"></td>
</tr>    
    </table>
</div>

<?php include 'layout/footer.php'; ?>