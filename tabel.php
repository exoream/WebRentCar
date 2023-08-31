<?php

include "koneksi.php";

$sql = "SELECT * FROM peminjaman";
$hasil = mysqli_query($koneksi, $sql);
$jumlah = mysqli_num_rows($hasil);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="tabelcss.css">
</head>
<body>
    <div class="navbar">
        <span class="brand">RentalCar</span>
        <ul class="navbarItem">
            <li id="a"><a id="link" href="main.php">Home</a></li>
        </ul>
    </div>
    <div class="semua" align="center">
        <h1><span style="color : cornflowerblue;">ReCar</span> DATABASE</h1>
        <table cellpadding="20">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>No. KTP</td>
                    <td>Nama</td>
                    <td>No. HP</td>
                    <td>Nama Mobil</td>
                    <td>Tanggal Peminjaman</td>
                    <td>Tanggal Pengembalian</td>
                    <td colspan="2">Opsion</td>
                </tr>
            </thead>
            <tbody>
            <?php

while ($data = mysqli_fetch_array($hasil)) {

    ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['no_ktp']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['no_hp']; ?></td>
                <td><?php echo $data['kd_mobil']; ?></td>
                <td><?php echo $data['tgl_peminjaman']; ?></td>
                <td><?php echo $data['tgl_pengembalian']; ?></td>

                <td>
                    <a id="cu" href="delete.php?id=<?php echo $data['id']; ?>"onclick="return confirm('Apakah Anda Ingin Benar - Benar Menghapus ?')">Hapus</a>
                </td>
                <td><a id="cu" href="update.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            </tr>
        <?php
}
?>
        </tbody>
    </table>
    </div>
</body>
</html>