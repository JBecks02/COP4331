<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contact Manager</title>
</head>

<body>
    <main>

        <!-- LOGIN -->
        <div class="wrapper">
            <form action="login.php" method="post">
                <h1>Welcome back!</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <button type="submit" class="btn">Sign in</button>
            </form>
        </div>

        <!-- NEW USER -->
        <div class = "wrapper">
            <form action="signUp.php" method="post">
                <h1>New User</h1>
                <div class="input-box">
                    <input type="text" name="firstname" placeholder="First Name" required>
                </div>
                <div class="input-box">
                    <input type="text" name="lastname" placeholder="Last Name" required>
                </div>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn">Sign up</button>
            </form>
        </div>
</body>
<html>
