<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Controller dan View</title>
</head>
<body>
    <p>Belajar Controller Laravel dengan Mudah</p>
    <p>Belajar Array : </p>
    <ul>
        @foreach ($mata_kuliah as $matkul)
        <li>{{$matkul}}</li>
        @endforeach
    </ul>
</body>
</html>