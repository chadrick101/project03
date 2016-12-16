<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Contact Me</title>
	<link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
	<style>
	/* Some appearance adjustments... */
	h1, h2 { margin: 0.5em 0 0.25em; }
	h1 { font-size: 1.5em; }
	h2 { 
		font-size: 1em;
		font-weight: normal;
	}

	textarea { 
		width: 350px;
		height: 7rem;
	}

	/* The square brackets is a way to target just
		the SUBMIT button with styles */
	input[type="submit"] { margin-top: 10px; }

	</style>

	  <!-- JS form validation -->
      <script type="text/javascript">

         function validateEmail() {
            var emailID = document.myContact.lastname.value;
            atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");
         
            if (atpos < 1 || ( dotpos - atpos < 2 )) {
               alert("Please enter a correct email address.");
               document.myContact.lastname.focus() ;
               return false;
            }

            return(true);
         }

		function validate()
		         {
		      
            if( document.myContact.name.value == "" ) {
               alert( "Please enter your name." );
               document.myContact.name.focus() ;
               return false;
            }
         
            if(!validateEmail()) {
               return false;
            }

          return (true);
         }

      </script>

</head>

<body>

    <!-- Navigation -->
	<?php include "inc/nav.inc"; ?>
	
<section id="first">
 <div class="container">
	<h1>Questons?</h1>
	 <div class="contactframe">
		<form method="post" name="myContact" action="database-write.php" onsubmit="return(validate());">

			Name: 
			<div>     
				<input type="text" name="firstname" id="firstname" placeholder="John Doe" required autofocus>
				<label for="firstname"></label>
			</div>

			Email: 
			<div>   
				<input type="text" name="lastname" id="lastname" placeholder="abc@email.com" required>
				<label for="lastname"></label>
			</div>

			Telephone:
			<div>
				<input type="text" name="phone" id="phone" placeholder="123-456-7890" required>
				<label for="phone"></label>
			</div>

			Message:
			<div>
				<textarea name="textarea" id="textarea">
				</textarea>
			</div>

			<div>
				<input type="submit" value="Send">
			</div>
		</form>
	 </div>
 </div> <!-- Container -->
</section>

<?php include "inc/footer.inc"; ?>


</body>
</html>