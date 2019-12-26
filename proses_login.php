<?php
include ('koneksi.php');
session_start();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = mysqli_query($koneksi,"SELECT * FROM tbuser where username = '$username' AND password = '$password'");

        $cek = mysqli_num_rows($db);        
        if ($cek>0) {                           
            $ambil = mysqli_fetch_assoc($db);
            if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
                echo "<script>alert('Incorrect verification code');</script>" ;
              } 
            else {
                if ($ambil['level']=="admin") {
                $_SESSION['username']=$username;
                $_SESSION['level']=$ambil['level']; 
                $_SESSION['iduser']=$ambil['id_user'];                                      
                // echo $_SESSION['level'];
                header("location:admin/admin.php");
            }
            else if ($ambil['level']=="user") {
                $_SESSION['username']=$username;
                $_SESSION['level']=$ambil['level'];   
                $_SESSION['iduser']=$ambil['id_user'];   
                // echo $_SESSION['userid'];                                 
                // echo $_SESSION['level'];
                header("location:project/project.php");
            }
            else{
            echo "<script>window.alert('username dan password tidak terdaftar');window.location='login.php'</script>";
            }
        }
    }else{
        echo "<script>window.alert('Akun Tidak Terdaftar');window.location='login.php'</script>";    
    }
}