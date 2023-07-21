<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="log">
    <div class="wrapper">
        <form action="connect.php" method="get">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" name="username" required>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div class="forgot-pass">
                <a href="#">forgot password?</a>
            </div>
            <div class="input-btn">
                <button type="submit" class="btn">Login</button>
            </div>
            <div class="register">
                <p>You don't have an account with us? 
                <p>Create here</p>
                <a href="#">Register</a>
            </div>
        </form>
    </div>
</body>
</html>