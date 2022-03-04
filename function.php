<?php
    // menghubungkan database
    $conn = mysqli_connect ("localhost","root","","lm");

    // membuat array kosong
    function query ($query) {
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc ($result) ) {
            $rows [] = $row;
        }
        return $rows;
    }

    // menambahkan fungsi tambah user
    function register($data) {
        global $conn;
    
        $username = strtolower(stripcslashes($data["nama"]));
        $email = strtolower($data["email"]);
        $telp = $data["telp"];
        $password = mysqli_real_escape_string($conn,$data ["pass1"]);
        $password2 = mysqli_real_escape_string($conn,$data ["pass2"]);
    
        //cek username sudah ada atau belum
        $result = mysqli_query($conn,"SELECT nama FROM  user WHERE nama = '$username' ");
    
        if ( mysqli_fetch_assoc($result) ) {
            echo "<script>
            alert('Username yang dipilih sudah tersedia!');
            </script>";
    
            return false;
        }
    
        //cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
                alert('konfirmasi password Tidak Sesuai!');
                </script>";
                return false;
        }
    
        // encripsi password 
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        // tambahkan user baru ke database 
        mysqli_query ($conn,"INSERT INTO user VALUES ('','$username','$email','$telp','$password')");
    
        return mysqli_affected_rows($conn);
    }
?>