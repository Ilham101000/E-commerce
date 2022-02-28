<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Daftar</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    <div class="container">

        <form action="index.php" method="post" class="login">
            <h1>SIGN-IN</h1>
            <div class="daftar">
                Belum punya akun?<br>
                <a href="#">Daftar</a>
            </div>
            <div class="underline"></div><br>

            <input type="text" name="email" id="email" placeholder="Email/No.Handphone/Username"><br>
            <input type="password" name="password" id="password" placeholder="Password"> <br>
            <input type="checkbox" name="ingat" id="ingat" value="Ingat Saya">Ingat Saya
            <a href="#" class="forget">Forget Password?</a> <br><br>
            <button type="submit" id="masuk">
                <a href="index.php"></a>Masuk
            </button><br>
            <hr>
        </form>
    </div>
</body>
</html>