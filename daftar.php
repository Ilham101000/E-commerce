<?php
    require 'function.php';

    // mengecek apakah tombol daftar sudah di tekan atau belum
    if (isset($_POST["daftar"]) ) {
        
        if ( register ($_POST) > 0) {
            echo " <script>
                    alert ('User baru berhasil ditambahkan!');
                    document.location.href= 'login.php';
                    </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="daftar.css">
    <title>Daftar</title>
</head>
<body>
        <div class="logo">
            <img src="gambar/bg putih2.png" alt="Logo LM">
            <p class="name"><b>LM | REGISTRASI</b></p>
        </div>
    <div class="container">
        <form action="" method="post">

            <center><h3 class="REGISTRASI">REGISTRASI</h3></center>
            
                <input type="text" name="nama" id="nama" placeholder="Username" required>            
                <input type="email" name="email" id="email" placeholder="Email" required>                
                <input type="text" name="telp" id="telp" placeholder="Nomor Telepon" required>
                <input type="password" name="pass1" id="pass1" placeholder="Password" required>
                <input type="password" name="pass2" id="pass2" placeholder="Konfirmasi Password" required>
        
                <button type="submit" name="daftar" class="daftar">Daftar</button>
                <hr>
                    <a href="#"><input type="button" value="Facebook" id="fb"></a>
                    <a href="#"><input type="button" value="Google" id="google"></a><br><br>
                <center>
                    <p class="p1">Dengan mendaftar, Anda setuju dengan</p>
                    <p class="p2"> Syarat,Ketentuan dan Kebijakan dari LM</p>
                    <p class="p3">&</p>
                    <p class="p4">Kebijakan Privasi</p>
                </center>

                <div class="login">
                    punya akun? <a href="login.php" class="link">Log in</a>
                </div>
            </table>
        </form>
    </div>
</body>
</html>