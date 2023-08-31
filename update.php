<?php

include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM peminjaman WHERE id = $id";
$hasil = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="navbar">
        <span class="brand">RentalCar</span>
        <ul class="navbarItem">
            <li id="a"><a href="1st.html">Home</a></li>
            <li id="a"><a href="#section2">Car List</a></li>
            <li id="a"><a href="#footer">Our Contact</a></li>
        </ul>
    </div>

    <div class="section1" id="section1">
        <div class="form">
            <h4>Form Rental</h4>
            <form action="simpan.php" method="post">
            <?php
    while ($data = mysqli_fetch_array($hasil)) {
    # code...
    ?>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="ktp" name="no_ktp">
                    <label>No. KTP</label><br>
                    <input type="text" name="no_ktp" id="no_ktp" value="<?php echo $data['no_ktp'] ?>"> 
                </div>
                <div class="nama" name="nama">
                    <label>Nama</label><br>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                </div>
                <div class="noTelp" name="no_hp">
                    <label>No. Telepon</label><br>
                    <input type="number" name="no_hp" id="no_hp" <?php echo $data['no_hp'] ?>>
                </div>
                <div class="mobil" name="kd_mobil">
                    <label>Mobil</label><br>
                    <select name="kd_mobil" id="kd_mobil">
                        <option value="DD HCR51 V" <?php if ($data['kd_mobil'] == "Honda CR-V") {echo "checked";}?>>Honda CR-V</option>
                        <option value="DD C12 RS" <?php if ($data['kd_mobil'] == "Honda Civic RS") {echo "checked";}?>>Honda Civic RS</option>
                        <option value="DD TA 987" <?php if ($data['kd_mobil'] == "Toyota Avanza") {echo "checked";}?>>Toyota Avanza</option>
                        <option value="DD TV 22" <?php if ($data['kd_mobil'] == "Toyota Vios") {echo "checked";}?>>Toyota Vios</option>
                        <option value="DD DA 62" <?php if ($data['kd_mobil'] == "Daihatsu Ayla") {echo "checked";}?>>Daihatsu Ayla</option>
                    </select>
                </div>
                <div class="tglPem" name="tgl_peminjaman">
                    <label>Tanggal Peminjaman</label><br>
                    <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" <?php echo $data['tgl_peminjaman'] ?>>
                </div>
                <div class="tglPen" name="tgl_pengembalian">
                    <label>Tanggal Pengembalian</label><br>
                    <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" <?php echo $data['tgl_pengembalian'] ?>>
                </div>
                <div class="kumpul" align="center">
                    <button type="submit" id="submit">Order Now!</button>
                </div>
                <?php
}
?>
            </form>
        </div>
      
        <div class="carList" id="section2" align="center">
            <hr>
            <h2 class="header2">Car <span class="blue">List</span></h2>
            <div class="row1" align="center">
                <div class="car">
                    <img src="hondaCr-v.jpeg" alt="" height="100px" width="150px">
                    <div class="carInfo">
                        <span class="carName">Honda CR-V</span><br>
                        <span class="price">Price Here</span>
                    </div>
                </div>
                <div class="car">
                    <img src="hondaCivic.jpeg" alt="" height="100px" width="150px">
                    <div class="carInfo">
                        <span class="carName">Hodan Civic RS</span><br>
                        <span class="price">Price Here</span>
                    </div>
                </div>
            </div>
            <div class="row2" align="center">
                <div class="car">
                    <img src="avanza.jpg" alt="" height="100px" width="150px">
                    <div class="carInfo">
                        <span class="carName">Toyota Avanza</span><br>
                        <span class="price">Price Here</span>
                    </div>
                </div>
                <div class="car">
                    <img src="vios.jpeg" alt="" height="100px" width="150px">
                    <div class="carInfo">
                        <span class="carName">Toyota Vios</span><br>
                        <span class="price">Price Here</span>
                    </div>
                </div>
            </div>
            <div class="row3" align="center">
                <div class="car">
                    <img src="ayla.jpeg" alt="" height="100px" width="150px">
                    <div class="carInfo">
                        <span class="carName">Daihatsu Ayla</span><br>
                        <span class="price">Price Here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer" id="footer">
        <span class="brand">RentalCar</span>
        <span class="copy">&copy copyright RentalCar</span>
        <ul class="social"><br>
            <li id="b">
                <a href="https://www.facebook.com/index.php" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg></a>
            </li>
            <li id="b">
                <a href="https://twitter.com/i/flow/login" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg></a>
            </li>
            <li id="b">
                <a href="https://www.instagram.com/" target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg></a>
            </li>
        </ul>
    </div>
</body>
</html>