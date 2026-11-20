<?php
$angka1 = $_POST['Angka1'];
$angka2 = $_POST['Angka2'];
$operator = $_POST['operator'];

if ($operator == "Tambah") {
    $hasil = $angka1 + $angka2;
} elseif ($operator == "Kurang") {
    $hasil = $angka1 - $angka2;
} elseif ($operator == "Kali") {
    $hasil = $angka1 * $angka2;
} elseif ($operator == "Bagi") {
    if ($angka2 != 0) {
        $hasil = $angka1 / $angka2;
    } else {
        $hasil = "Error: Pembagian dengan nol tidak diperbolehkan.";
    }
} elseif ($operator == "Modulo") {
    if ($angka2 != 0) {
        $hasil = $angka1 % $angka2;
    } else {
        $hasil = "Error: Pembagian dengan nol tidak diperbolehkan.";
    }
} else {
    $hasil = "Operator tidak valid.";
}

echo "Hasil dari $angka1 $operator $angka2 : $hasil";
?>