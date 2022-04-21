<?php
    session_start();
    if(!isset($_SESSION['nama'])){
        header("location:login.php");
    }else{
?>
<html>
    <head>
        <title>Halaman Beranda</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <header>
            <ul>
                <a href="index.php"><li>Beranda</li></a>
                <a href="profil.php"><li>Profil</li></a>
                <a href="keluar.php"><li>Logout</li></a>
            </ul>
        </header>

        <section>
            <center>
                <font style="font-size:40px;">Selamat Datang <?php echo $_SESSION['nama'] ?> Di SMAN 1 Komodo</font>
            </center>
        </section>

        <footer>
            copyright &copy; 2022 Ovilina. All Right Reserved.
        </footer>
    </body>
</html>
<?php } ?>