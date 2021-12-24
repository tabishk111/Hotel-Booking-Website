<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="Icon.png" />
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <div class="leftside">
            <div class="signIn">
                <div class="logo">
                    <a href="index.php"><img src="Logo.png" alt="Logo" height="90"></a>
                </div>
                <form action="">
                    <h1 class="heading">Admin Login</h1>
                    <div>
                        <label for="email">Email or Username</label>
                        <input type="text" class="form__input" id="email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" class="form__input" id="password">
                    </div>
                    <button type="submit" class="submit__button">Sign In</button>
                </form>
            </div>

            <footer class="footer">
                <p>Copyright &copy; 2021, City Palace All Rights Reserved</p>
            </footer>
        </div>
    </div>
</body>
</html>