<?php
    session_start();
    if(isset($_SESSION['nama'])){
        header("location:index.php");
    }else{
?>
<html>
    <head>
        <title>Halaman Beranda</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
            <div class="box-login">
                <font style="font-size:26px;color:black;">Silakan Login</font>
                <form action="" method="post">
                    <input type="text" name="email" placeholder="Masukan Emailmu" /><br>
                    <input type="password" name="pass" placeholder="Masukan Password" /><br>
                    <input type="submit" name="masuk" value="Masuk" /><br>
                </form>
                <?php
                    include "koneksi.php";
                    if(isset($_POST['masuk'])){ 
                        $cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."' AND password = '".$_POST['pass']."'");
                        $hasil = mysqli_fetch_array($cek);
                        $count = mysqli_num_rows($cek);
                        $nama_user = $hasil['nama'];
                        if($count > 0){
                            session_start();
                            $_SESSION['nama'] = $nama_user;
                           header("location:index.php");
                        }else{
                            echo "gagal masuk";
                        }
                    }
                ?>
            </div>
    </body>
</html>
<?php } ?>