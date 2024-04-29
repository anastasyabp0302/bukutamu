<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Tambahkan jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
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
    <div class="form-container">
        <h1>Data Tamu</h1>
        <form action="{{ url('/simpan_tamu') }}" method="POST">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="alamat">Alamat:</label>
            <textarea type="text" name="alamat" required></textarea>

            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" required>

            <label for="tujuan">Tujuan:</label>
            <input type="text" name="tujuan" required>

            <button type="submit">Simpan</button>
        </form>
    </div>

    <script>
        $(function() {
            $("#tanggal").datepicker({
                dateFormat: "dd/mm/yy",
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
</body>
</html>
