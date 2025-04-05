<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="style">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div_esterno">
        <div class="div_titolo">
        <b>Eseguire il login</b>
        </div><br>
        <div class="div_interno">
        <form action="login.html" method="post">
            <label for="username"><b>Username:</b></label>
            <input type="text" id="username" name="username" required class="login">
            <br><br>
            <label for="password"><b>Password:</b></label>
            <input type="password" id="password" name="password" required class="login">
            <br><br>
            <input type="submit" value="Login">
        </form>
        </div>
    </div>
</body>
</html>