<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F4DFC8;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('bg db.jpeg');
            background-size: cover;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #F3B95F;
            color: #fff;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #F3B95F;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 15px;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        a:hover {
            background-color: #F4DFC8;
        }

        .login-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #F3B95F;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 15px;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .login-button:hover {
            background-color: #2E3A4D;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Tamu</h1>

        <table>
            <thead>
            </thead>
            <!-- Add table data here -->
        </table>

        <a href="{{ route('welcome') }}">Kembali ke Beranda</a>
        <a href="{{ route('login') }}" class="Login-button">Login</a>
    </div>
</body>
</html>
