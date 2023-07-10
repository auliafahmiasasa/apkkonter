<?php

if(isset($_POST['simpan'])){
    $koneksi = mysqli_connect("localhost", "root", "", "konter") 
    or die(mysqli_connect_error());

    $jum = $_POST['jum'];
    
    $barang = $_POST['nomer'];
    $nama = $_POST['nama'];
    

    for($i=0 ; $i < $jum ; $i++){
        mysqli_query($koneksi, "INSERT INTO tb_konter SET nama = '$nama[$i]',
        nomer = '$barang[$i]'") or die (mysqli_error($koneksi));
    }

    header('location: ../view.php');
}