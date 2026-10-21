<?php

include_once 'config/app.php';

// menerima id_barang dari url
$id_barang = (int)$_GET['id_barang'];

if (delete_barang($id_barang) > 0) {
    echo "<script>
            alert('Data Barang Berhasil Dihapus');
            document.location.href = 'index.php';
          </script>";
} else {
    echo "<script>
            alert('Data Barang Gagal Dihapus');
            document.location.href = 'index.php';
          </script>";
}