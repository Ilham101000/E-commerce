<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Daftar</title>
    <link href="login.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div class="container">
        <img src="gambar/bg putih2.png" alt="Logo LM"><br>
        <p class="p">Tempat Jual Beli Logam Mulia No.1</p>
        <p class="p2">Se-Indonesia</p>
        <form action="" method="post" class="login">
            <h1>SIGN-IN</h1>
            <div class="daftar">
                Belum punya akun?<br>
                <a href="#">Daftar</a>
            </div><br>
            <hr>

            <input type="text" name="email" id="email" placeholder="Email/No.Handphone/Username"><br>
            <input type="password" name="password" id="password" placeholder="Password"> <br>
            <input type="checkbox" name="ingat" id="ingat" value="Ingat Saya">Ingat Saya
            <a href="#" class="forget">Forget Password?</a> <br><br>
            <a href="index.php"><input type="button" value="Masuk" id="masuk"></a><br>
            <hr>
            <a href="#"><input type="button" value="Facebook" id="fb"></a><br>
            <a href="#"><input type="button" value="Google" id="google"></a>
        </form>
    </div>
</body>
</html>