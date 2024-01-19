<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filow Shop Costumer Log-In</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Welcome to Filow Shop!</h2>
            <form action="loginphp.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="pword" required>
                </div>
                <button type="submit" name="signin" value="sign in">Login</button>
                <p><a href="New.php">Create account?</a></p>
            </form>
        </div>
    </div>
</body>
</html>
