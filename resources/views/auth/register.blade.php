<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text.css" href="style.css">
    <title>Register</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #F4DFC8;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
     margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
button {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
}

button {
    background-color: #FFC671;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
}

button:hover {
    background-color: #f4dfc8;
}

.switch-link {
    text-align: center;
    font-size: 14px;
    color: #007BFF;
    text-decoration: none;
    cursor: pointer;
}

.switch-link:hover {
    color: #0056b3;
}
</style>
    <form action="{{ route('login') }}" method="POST">
</head>
<body>
    <div class="container">
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Register</button>
    </form>
    <p> Belum punya akun? <a href="{{ route('register_form') }}" >Daftar disini!</a></p>
</div>
</body>
</html>
