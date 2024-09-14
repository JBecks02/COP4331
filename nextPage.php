<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ID=edge">
        <title>Your Page Title</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Contact Manager</title>
    </head>

    <body>
        <main>


            <div class="wrapper">
            <h1>Search contacts</h1>

            <form action="search.php" method="post">
                
                    <input class="input-box" name="searchtext" type="search" placeholder="Search">
                    <button class="btn">Submit</button>
		    </form>
            </div>


	    <?php
		if(isset($_SESSION['loadcontacts']) && $_SESSION['loadcontacts'] == '1'){
			foreach( $_SESSION['result'] as $contact){
				echo "<p>" . $contact['firstname'] . " " . $contact['lastname'] . ", " . $contact['phone'] . ", " . $contact['email'] . "</p>";
			}
			$_SESSION['loadcontacts'] = '0';

		}
		else{
		}

	    ?>

            <div>

            </div>

            <div class="wrapper">
	
	            <form action="addContact.php" method="post">
                <h1>Add Contact</h1>
                
                <div class="input-box">
                <input required id="firstname" type="text" name="firstname" placeholder="Firstname..." width="1004">
                </div>

                <div class="input-box">
	            <input required id="lastname" type="text" name="lastname" placeholder="lastname">
	            </div>

                <div class="input-box">
	            <input required id="phone" type="text" name="phone" placeholder="Phone Number">
                </div>

                <div class="input-box">
	            <input required id="email" type="text" name="email" placeholder="Email Address">
                </div>

                <button class="btn">Add</button>
                </form>

	    </div>

	    <div class="wrapper">

                    <form action="updateContact.php" method="post">
		<h1>Update Contact</h1>

		<h3>Enter Contact to Update:</h3>

                <div class="input-box">
                <input required id="firstnameS" type="text" name="firstnameS" placeholder="Firstname..." width="1004">
                </div>

                <div class="input-box">
                    <input required id="lastnameS" type="text" name="lastnameS" placeholder="lastname">
		    </div>

		<h3>Update Contact to:</h3>
		
		<div class="input-box">
		<input required id="firstnameU" type="text" name="firstnameU" placeholder="First name" width="1004">
		</div>
		
		<div class="input-box">
		<input required id="lastnameU" type="text" name="lastnameU" placeholder="Last name">
		</div>
		

                <div class="input-box">
                    <input required id="phone" type="text" name="phone" placeholder="Phone Number">
                </div>

                <div class="input-box">
                    <input required id="email" type="text" name="email" placeholder="Email Address">
                </div>

                <button class="btn">Update</button>
                </form>

	    </div>

            <div class="wrapper">
	        <form action="rmContact.php" method="post">
		    <h1>Remove Contact</h1>
	        
            <div class="input-box">
            <input  required id="firstname" type="text" name="firstname" placeholder="Firstname..." width="1004">
            </div>

            <div class="input-box">
	        <input required id="lastname" type="text" name="lastname" placeholder="lastname">
            </div>

            <button class="btn">Remove</button>

	        </form>

            </div>


    
        <section>
            <button>
                <a href="http://www.marketsofesos.xyz/" class="btn">Sign out</a>
            </button>
        </section>



        </main>
    </body>

</html>
