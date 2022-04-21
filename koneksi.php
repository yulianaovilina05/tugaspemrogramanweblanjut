<?php
    $conn = mysqli_connect('localhost:3307','root','','sekolahku');
    if(!$conn){
        echo 'gagal terhubung ke database';
    }
?> 