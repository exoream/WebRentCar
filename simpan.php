<?php

include "koneksi.php";

$id = $_POST['id'];
$no_ktp = $_POST['no_ktp'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$kd_mobil = $_POST['kd_mobil'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];

$sql = "UPDATE peminjaman SET no_ktp = '$no_ktp', nama = '$nama', no_hp = '$no_hp', kd_mobil = '$kd_mobil', tgl_peminjaman = '$tgl_peminjaman', tgl_pengembalian = '$tgl_pengembalian' WHERE id = $id ";

(mysqli_query($koneksi, $sql));

?>

<script>
    document.location.href = "tabel.php"
</script>