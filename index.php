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
                    <div class="input-box">
                        <input type="text" name="username" placeholder="username" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="password" placeholder="password" required>
                    </div>
                    <div class="remember-forget">
                    
                    </div>
                    <button class="btn">Login</button>
                </form>
            </div>
        <!-- End of the log in area of the home page -->





            <div class="wrapper">

                <form action="formhandler.inc.php" method="post">
                <h1>New User</h1>

            
            
                

                <div class="input-box">
                <input  required id="firstname" type="text" name="firstname" placeholder="First Name" width="1004">
                </div>

                

                <div class="input-box">
                <input required id="lastname" type="text" name="lastname" placeholder="Last Name">
                </div>

                

                <div class="input-box">
	            <input required id="username" type="text" name="username" placeholder="Username">
                </div>

                
                <div class="input-box">
	            <input required id="password" type="text" name="password" placeholder="Password">
                </div>

                <button class="btn" type="Submit">Submit</button>
                </div>
            </div>
        </form>
    


    </body>
<html>
