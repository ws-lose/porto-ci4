<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caesar Transhiver</title>

    <style>
        body{
            font-family: Arial;
            background:#f2f2f2;
            padding:20px;
        }

        .title{
            font-size:20px;
            color:#333;
            margin-bottom:5px;
        }

        .subtitle{
            margin-left: 8px;
            font-size:14px;
            color:#666;
            margin-bottom:32px;
        }

        .container{
            max-width:400px;
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

        label{
            font-weight:bold;
            font-size:14px;
            color:#333;
        }

        button{
            font-size:16px;
            font-weight:bold;
            width:100%;
            padding:10px;
            background:#007bff;
            border:none;
            color:white;
            border-radius:6px;
            cursor:pointer;
            margin-top:14px;
        }

        button:hover{
            background:#0056b3;
        }

        .hasil-encrypt{
            margin-top:32px;
        }
        .hasil-decrypt{
            margin-top: 16px;
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
    <h2 class="title">Caesar Transhiver (Caesar Transposition Shift reVerse)</h2>
    <p class="subtitle">Caesar Transhiver adalah metode enkripsi teks yang menggunakan pergeseran huruf +3, membalik teks dan perpindahan huruf dalam kata</p>
    <form method="post">

        <label for="teks">Input Text</label>
        <textarea name="teks" id="teks" required><?php echo $_POST['teks'] ?? ''; ?></textarea>

        <button type="submit" name="proses">Submit</button>

    </form>

    <div class="hasil-encrypt">
        <label for="encrypt">Hasil Encrypt</label>
        <input type="text" id="encrypt" value="<?= $enc ?>" disabled>
    </div>

    <div class="hasil-decrypt">
        <label for="decrypt">Hasil Decrypt</label>
        <input type="text" id="decrypt" value="<?= $dec ?>" disabled>
    </div>

</div>

</body>
</html>