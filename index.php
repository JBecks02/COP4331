<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ID=edge">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Contact Manager</title>
    </head>

    <body>
        <main>

        <!-- Below is the log in portion of our home page -->
            <div class="wrapper">
                <form action="login.php" method="post">
                    <h1>Login</h1>
                    <div class="input">
                        <input type="text" name="username" placeholder="username" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="password" placeholder="password" required>
                    </div>
                    <div class="remember-forget">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button>Submit</button>
                </form>
            </div>
        <!-- End of the log in area of the home page -->



        <form action="formhandler.inc.php" method="post">
            <h2>New User</h2>
            <label for="firstname">Firstname</label>
            <input  required id="firstname" type="text" name="firstname" placeholder="First Name" width="1004">
            <label for="lastname">Lastname</label>
            <input required id="lastname" type="text" name="lastname" placeholder="Last Name">
	    <label for="username">Username</label>
	    <input required id="username" type="text" name="username" placeholder="Username">
	    <label for="password">Password</label>
	    <input required id="password" type="text" name="password" placeholder="Password">
            <button class="submit-button" position="relative" type="Submit">Submit</button>
        </form>
    



        <div>
            <a href="https://www.tiktok.com/@classiedevva3/video/7396798316534631723" class="sleek-button">Spagetti</a>
        </div>


    </body>
<html>
