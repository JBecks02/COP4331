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


            <p>This is a new page after login</p>

            <form action="">
                <div class="search">
                    <span class="search-icon material-symbol-outlined">Contacts</span>
                    <input class="search-input" type="search" placeholder="Search">
                    
                </div>

	    </form>
		
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




        </main>
    </body>

</html>
