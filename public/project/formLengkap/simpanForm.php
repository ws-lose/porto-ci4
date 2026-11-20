<?php
$nama = $_POST['name'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];



echo "Nama : $nama <br>";
echo "Tempat Tanggal Lahir : $tempat <br>";
echo "Tanggal Lahir : $tgl<br>";
echo "Jenis Kelamin : $jk <br>";
echo "Agama : $agama <br>";
echo "Alamat : $alamat <br>";

echo "hobi anda adalah : ";
if (isset($_POST['hobi1'])) {
    echo $_POST['hobi1']."<br>";
} if (isset($_POST['hobi2'])) {
    echo $_POST['hobi2']."<br>";
} if (isset($_POST['hobi3'])) {
    echo $_POST['hobi3']."<br>";
} if (isset($_POST['hobi4'])) {
        echo $_POST['hobi4']."<br>";
}

$dirUpload = "image/";
$uploadFile = $dirUpload.$_FILES['file']['name'];

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
    if ($kirim) {
        echo "File berhasil diupload ke folder <b>$uploadFile</b>";
        echo "<img src='$uploadFile' >";
    } else {
        echo "File gagal diupload<br>";
        echo "Error :" . $_FILES['file']['error'];
    }
}
?>