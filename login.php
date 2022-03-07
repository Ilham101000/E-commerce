<?php
    session_start();
    require 'function.php';

     // cek cookie
     if(isset($_COOKIE['id']) && isset ($_COOKIE['key']) ) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan querynya 
        $result = mysqli_query($conn,"SELECT nama FROM user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if($key === hash('sha256', $row['nama']) ) {
            $_SESSION['masuk'] = true;
        }
    }

	if( isset($_SESSION["masuk"]) ) {
		header("location:index.php");
		exit;
	}

    if (isset ($_POST["masuk"]) ) {
        
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn,"SELECT * FROM user
                WHERE email = '$email' OR nama = '$email' OR telp = '$email' ");

        //cek username
        if ( mysqli_num_rows($result) === 1 ) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            if ( password_verify ($password,$row["password1"]) ) {
                // ser session
                $_SESSION ["masuk"] = true;

                //cek remember me
                if(isset($_POST['ingat']) ) {
                    // buat cookie
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256', $row['nama']), time() + 60 );
                }

                header("location: index.php");
                exit;
            }
        }

        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Daftar</title>
    <link href="CSS/login.css" rel="stylesheet" type="text/css">
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
                <a href="daftar.php">Daftar</a>
            </div><br>
            <input type="text" name="email" id="email" placeholder="Email/No.Handphone/Username"><br>
            <input type="password" name="password" id="password" placeholder="Password"> <br>
            <input type="checkbox" name="ingat" id="ingat" value="Ingat Saya">Ingat Saya
            <a href="forget.php" class="forget">Forget Password?</a> <br><br>
            <button type="submit" name="masuk" id="masuk">Masuk</button><br>
            <hr>
            <a href="#"><input type="button" value="Facebook" id="fb"></a><br>
            <a href="#"><input type="button" value="Google" id="google"></a>
        </form>
    </div>
</body>
</html>