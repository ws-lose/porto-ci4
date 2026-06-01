<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RST Cipher</title>

    <style>
        body{
            font-family: Arial;
            background:#f2f2f2;
            padding:20px;
        }

        .container{
            max-width:650px;
            margin:auto;
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{text-align:center;}

        textarea, input{
            width:96%;
            padding:10px;
            margin:8px 0;
            border:1px solid #ccc;
            border-radius:6px;
        }

        input[disabled]{
            background:#e9ecef;
            color:#333;
        }

        button{
            width:100%;
            padding:10px;
            background:#007bff;
            border:none;
            color:white;
            border-radius:6px;
            cursor:pointer;
        }

        button:hover{
            background:#0056b3;
        }

        .section{
            margin-top:15px;
        }
    </style>
</head>
<body>
<?php include 'proses.php'; 
$enc = "";
$dec = "";

if (isset($_POST['proses'])) {
    $input = $_POST['teks'];

    $enc = encrypt($input, $shift);
    $dec = decrypt($enc, $shift);
}

?>
<div class="container">
    <h2>Caesar Transhiver (Caesar Transposition Shift reVerse)</h2>
    <form method="post">

        <label>Input Text</label>
        <textarea name="teks" required><?php echo $_POST['teks'] ?? ''; ?></textarea>

        <button type="submit" name="proses">PROCESS (Encrypt & Decrypt)</button>

    </form>

    <div class="section">
        <label>Hasil Enkripsi</label>
        <input type="text" value="<?= $enc ?>" disabled>
    </div>

    <div class="section">
        <label>Hasil Dekripsi</label>
        <input type="text" value="<?= $dec ?>" disabled>
    </div>

</div>

</body>
</html>