<?php 
include 'layout/header.php';

$data_barang = select("SELECT * FROM barang ORDER BY id_barang ASC");
?>

<div class="container mt-5">
    <h2 style="text-align: center;">Data Barang</h2>
    <a href="tambah-barang.php" class="btn btn-primary mb-3">Tambah</a>

    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>JUMLAH</th>
                <th>HARGA</th>
                <th>TANGGAL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_barang as $barang) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $barang['nama']; ?></td>
                    <td><?= $barang['jumlah']; ?></td>
                    <td>Rp. <?= number_format($barang['harga'], 0, ',', '.'); ?></td>
                    <td><?= date("d/m/Y | H:i:s", strtotime($barang['tanggal'])); ?></td>
                    <td width="15%" class="text-center">
                        <a href="ubah-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success btn-sm">Ubah</a>
                        <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'layout/footer.php'; ?>
