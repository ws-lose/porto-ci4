<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM lENGKAP</title>
</head>
<body>
    <form ENCTYPE="multipart/form-data" method="POST" action="simpanForm.php">

        nama : <input type="text" name="name"><br>
        Tempat Tanggal Lahir : <input type="text" name="tempat"><br><br>
        
        Tanggal Lahir : <input type="date" name="tgl"><br><br>
        
        Jenis Kelamin : <br>
        <input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan">Perempuan<br><br>
        
        agama :
        <select name="agama" id="">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
        </select>
        <br><br>

        alamat : <textarea name="alamat" id=""></textarea><br><br>

        Hobi : <br>
        <input type="checkbox" name="hobi1" id="" value="berenang">Berenang<br>
        <input type="checkbox" name="hobi3" id="" value="berlari">berlari<br>
        <input type="checkbox" name="hobi3" id="" value="memancing">memancing<br>
        <input type="checkbox" name="lainnya">Lainnya<br><br>

        Masukkan Foto : <input type="file" name="file"><br><br>

        <input type="submit" value="submit">
    </form>
        
</body>
</html>