<?php
    include ('koneksi.php');
    if(isset($_POST['submit'])){
        $name = $_POST['namalengkap'];
        $email= $_POST['email'];
        $username = $_POST['username'];
        $level = 'user';
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
            if ($password==$confirmpassword) {
                $insert=mysqli_query($koneksi,"INSERT INTO tbuser VALUES (
                    NULL,'$name','$email','$username','$password','$level',NULL)");
                if ($insert) {
                    echo "<script>window.alert('Daftar Sukses dong');window.location.href='login.php'</script>";
                }else{
                    echo "<script>window.alert('Gagal Daftar sih');window.location='register.php'</script>";
                }
            }else{
                echo "<script>window.alert('Password tidak sesuai gaes');window.location='register.php'</script>";
            }
    }
