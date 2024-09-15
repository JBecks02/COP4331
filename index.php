<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ID=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contact Manager</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                    <input type="text" name="password" placeholder="Password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <div class = "table2">
            <!-- NEW USER -->
            <form action="formhandler.inc.php" method="post">
                <h1>New User</h1>
                <div class="box">
                    <input type="text" name="firstname" placeholder="First Name" required>
                </div>
                <div class="box">
                    <input type="text" name="lastname" placeholder="Last Name" required>
                </div>
                <div class="box">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="box">
                    <input type="text" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn">Sign up</button>
            </form>
        </div>
</body>
<html>
