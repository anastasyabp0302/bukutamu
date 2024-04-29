<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 1;
            padding: 0;
            background-image: url('path/to/your/image.jpg');
            background-size: cover;
            background-position: center;
            background-color: #F4DFC8;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: #000;
        }
        p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 15px;
            background-color: #FFD28F;
            color: #000;
            text-decoration: none;
            border-radius: 8px;
            font-size: 20px;
        }
        a:hover {
            background-color: #F4DFC8;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
    <img src="{{ asset('image/wk grt.jpg') }}" alt="wk grt.jpg" class="profile-image">
        <h1>Selamat Datang di SMK Wikrama 1 Garut</h1>
        <div class="welcome-container">
        <p>Silakan Isi Data Tamu</p>
        <a href="{{ route('tambah.tamu') }}">Klik Disini!</a>
    </div>
</body>
</html>
