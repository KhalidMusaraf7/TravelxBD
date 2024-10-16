<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="../Controllers/logCheckController.php">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="your username" required/>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required/>

        <button type="submit">Login</button>
        
        <div>Don't have an account yet?</div>
        <a href="signup.html">Sign Up</a>
    </form>
</body>
</html>
