<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input combobox</title>
</head>
<body>
    <p>Minuman apa yang anda sukai?</p>
    <form id="form-combobox" name="form-combobox" method="POST" action="prosesCombobox.php">
        <select name="favorit">
            <option value="Matcha">Matcha</option>
            <option value="Kopi">Kopi</option>
            <option value="Americano">Americano</option>
            <option value="EsTeh">EsTeh</option>
            <option value="Lainnya">Lainnya</option>
        </select>
        <input type="submit" name="button" value="Submit">
    </form>
</body>
</html>