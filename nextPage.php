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


            <p>Search Contacts</p>

            <form action="search.php" method="post">
                <div class="search">
                    <span class="search-icon material-symbol-outlined">Contacts</span>
                    <input class="search-input" name="searchtext" type="search" placeholder="Search">
                    <button>Submit</button>
                </div>
		</form>

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
		
	   <form action="addContact.php" method="post">
            <h2>Add Contact</h2>
            <label for="firstname">Firstname</label>
            <input  required id="firstname" type="text" name="firstname" placeholder="Firstname..." width="1004">
            <label for="lastname">Lastname</label>
	    <input required id="lastname" type="text" name="lastname" placeholder="lastname">
	    <label for="phone">Phone Nunber</label>
	    <input required id="phone" type="text" name="phone" placeholder="Phone Number">
            <label for="email">Email Address</label>
	    <input required id="email" type="text" name="email" placeholder="Email Address">
            <button class="submit-button" position="relative" type="Submit">Submit</button>
        </form>
            
	    <form action="rmContact.php" method="post">
		<h2>Remove Contact</h2>
	    <label for="firstname">Firstname</label>
            <input  required id="firstname" type="text" name="firstname" placeholder="Firstname..." width="1004">
            <label for="lastname">Lastname</label>
	    <input required id="lastname" type="text" name="lastname" placeholder="lastname">
	    <button class="submit-button" position="relative" type="Submit">Submit</button>
	    </form>


        <section>
            <button>
                <a href="http://www.marketsofesos.xyz/">Sign out</a>
            </button>
        </section>

        


        </main>
    </body>

</html>
