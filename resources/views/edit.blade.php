<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tamu</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #F4DFC8;

    }

    h1 {
        text-align: center;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        text-align: center;
        display: inline-block;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #F4DFC8;
    }
    </style>
</head>
<body>
    <h1>Edit Tamu</h1>
    <form action="{{ route('daftar_tamu.update', $tamu->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" value="{{ $tamu->nama }}"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ $tamu->email }}"><br>

    <label for="alamat">Alamat:</label><br>
    <input type="text" id="alamat" name="alamat" value="{{ $tamu->alamat }}"><br>

    <label for="kategori">Kategori:</label><br>
    <input type="text" id="kategori" name="kategori" value="{{ $tamu->kategori }}"><br>

    <label for="tujuan">Tujuan:</label><br>
    <input type="text" id="tujuan" name="tujuan" value="{{ $tamu->tujuan }}"><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
</body>
</html>