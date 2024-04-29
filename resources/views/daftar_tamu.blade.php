<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F4DFC8;
        }
        header {
            background-color: #FFC671;
            color: #fff;
            padding: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a.button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4px;
        }
        a.button:hover {
            background-color: #45a049;
            color: white;
        }
        button {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #d32f2f;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <!-- Tampilkan foto admin -->
            <img src="{{ asset('image/cca.jpeg') }}" alt="Admin Photo">
    </div>
        </div>
        <div>
            <!-- Tampilkan tombol logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </header>
    <div class="container">
        <h1>Daftar Tamu Tersimpan</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Tujuan</th>
                <th>Action</th>
            </tr>
            @foreach ($data_tamu as $tamu)
                <tr>
                    <td>{{ $tamu->id }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->email }}</td>
                    <td>{{ $tamu->alamat }}</td>
                    <td>{{ $tamu->kategori }}</td>
                    <td>{{ $tamu->tujuan }}</td>
                    <td>
                        <a class="button" href="{{ route('edit_tamu', $tamu->id) }}">Edit</a>
                        <!-- Formulir untuk menghapus tamu -->
                        <form action="{{ route('hapus_tamu', $tamu->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data tamu ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
