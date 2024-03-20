<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Request Data</title>
</head>
<body>
    <h2> Form Input Data </h2>
    <form action="form/proses" method="post">
        {{ csrf_field() }}
        <p>Nama :</p>
        <input type="text" name="nama">
        <br>
        <p>Alamat :</p>
        <input type="text" name="alamat">
        <br>
        <hr>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>