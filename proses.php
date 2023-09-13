<?php

include "koneksi.php";

$no_ktp = $_POST['no_ktp'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$kd_mobil = $_POST['kd_mobil'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];


$sql = "INSERT INTO peminjaman (no_ktp, nama, no_hp, kd_mobil, tgl_peminjaman, tgl_pengembalian) VALUES ('$no_ktp','$nama','$no_hp','$kd_mobil', '$tgl_peminjaman', '$tgl_pengembalian')";

(mysqli_query($koneksi, $sql));

?>
        <script>
            document.location.href = "tabel.php"
        </script>




