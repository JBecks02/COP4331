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
                <form action="login.php" method="post" id="loginForm">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" name="username" placeholder="username" required>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <div class="remember-forget">
                    
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
	    </div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent the default form submission

        const formData = new FormData(this);

        // Send the login request via fetch API
        fetch(this.action, {
            method: 'POST',  // Make a GET request
            headers: { 'Accept': 'application/json' },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 200) {
                // Redirect to the next page after a successful login
                window.location.href = data.redirect;
            } else {
                alert(data.message);  // Show an error message if login failed
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>

        <!-- End of the log in area of the home page -->





            <div class="wrapper">

                <form action="signUp.php" method="post">
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
	            <input required id="password" type="password" name="password" placeholder="Password">
                </div>

                <button class="btn" type="Submit">Submit</button>
                </div>
            </div>
        </form>
    


    </body>
<html>
