<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Penambahan</title>
</head>
<body>
    <h2>Penambahan</h2>

    <form action="{{ route('proses.tambah') }}" method="post">
    @csrf
    <input type="text" name="variablesatu" id="variablesatu"><br><br>
    <input type="text" name="variabledua" id="variabledua"><br><br>

    <input type="submit" value="Tambah">
    </form>
</body>
</html>