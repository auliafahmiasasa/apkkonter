<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tambah_auth.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h1>tambah data </h1>

<form action="tambah_insert.php" method="post">
<table border="3" cellpadding="10">
    <tr>
        <th>nama </th>
        <th>nomer tlpn/rekening/dana</th>
    </tr>

<?php
$jum = $_POST['jum'];

for($i=1 ; $i <= $jum ; $i++){
    echo "<tr>
    <td><input type='text' name='nama[]' size='14'></td>
    <td><input type='text' name='nomer[]' size='14'></td>
    </tr>";
}

?>
</table>

<input type="hidden" name="jum" value="<?php echo $jum; ?>">
<button type="submit" name="simpan">SIMPAN</button>
</form>

<form action="../view.html" method="post">
<button type="submit" name="batal" class="merah">BATAL</button>
</form>

