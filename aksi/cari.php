    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/cari.css">
        <title>Document</title>
    </head>
    <body>
    <div class="hias">
    <form action="" method="post">
    <input type="text" name="cari" autofocus size="12" placeholder="masukan nomer yg dicari">
    <button type="submit" name="mencari">cari</button>
    </form>
    <?php
     $koneksi = mysqli_connect("localhost", "root", "", "konter") 
     or die(mysqli_connect_error());
     $query = mysqli_query($koneksi, "SELECT * FROM tb_konter");
     
     if(isset($_POST['mencari'])){
        $cari = $_POST['cari'];
         
        $query = mysqli_query($koneksi, "SELECT * FROM tb_konter WHERE nama LIKE '%$cari%'
        or nomer LIKE '%$cari%'");
    
     }
     while($row = mysqli_fetch_assoc($query)){
    ?>
     <h3><?= $row['nama']. ' = '?>
     <?= $row['nomer'] ?><h3>
     </div>
    <?php
     }
    ?>  
    </body>
    </html>
    