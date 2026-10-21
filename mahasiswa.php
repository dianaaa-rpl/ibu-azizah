<?php

include 'layout/header.php';

$title = 'Daftar Mahasiswa';

// menampilkan data mahasiswa
$data_mahasiswa = select("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");

?>

<div class="container mt-5">
    <h2 style="text-align: center;">Data  Mahasiswa</h2>


    <a href="tambah-mahasiswa.php" class="btn btn-primary mb-3">Tambah</a>

    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th class="text-center" width="20%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_mahasiswa as $mahasiswa): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mahasiswa['nama']; ?></td>
                    <td><?= $mahasiswa['prodi']; ?></td>
                    <td><?= $mahasiswa['jk']; ?></td>
                    <td><?= $mahasiswa['telepon']; ?></td>
                    <td class="text-center" width="20%">
                        <a href="detail-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa']; ?>"
                         class="btn btn-secoundary btn-sm">Detail</a>
                        <a href="" class="btn btn-success btn-sm">Ubah</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
            </td>
            </tr>
            <?php endforeach; ?>   
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>