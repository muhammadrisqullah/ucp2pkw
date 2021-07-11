<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="cl1">
        <div class="formlg">
            <h1 id="judul">Toko Buku</h1>
            <div class="button">
                <div id="btnlogin"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form class="form" id="login" method="POST" action="toko_buku.php">
                <input type="text" id="nama" name="nama" class="input-field" placeholder="Username" required>
                <input type="password" id="password" name="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn"> <a href="toko_buku.php">Login</a> </button>
            </form>
            <form class="form" id="register" method="POST" action="toko_buku.php">
                <input type="text" id="nama" name="nama" class="input-field" placeholder="Username" required>
                <input type="password" id="password" name="password" class="input-field" placeholder="Password" required>
                <button type="submit" class="submit-btn"><a href="toko_buku.php">Register</a></button>
            </form>
        </div>
    </div>
    <script src="login.js"></script>
    
</body>
</html>