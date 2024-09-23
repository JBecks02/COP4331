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
        <h1 style="font-size: 50px; padding-top: 20px; text-align: center; color:white">Contact Manager</h1>

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
