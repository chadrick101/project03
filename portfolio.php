<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Chad's Portfolio</title>
        
        <!-- The stylesheet -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="css/long-scrolly.css">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Source+Sans+Pro" rel="stylesheet">
        

    </head>
    
    <body>

    <!-- Navigation -->
    <?php include "inc/nav.inc"; ?>

    <section> 
		<header>
			<h2>Welcome to</h2>
			<h1>Chadrick's Portfolio</h1>
		</header>

        <div id="main">
        	
        	<h3>My Latest Projects</h3>
        	<p>Below you can find a few of my projects and accomplishments, which are some of my course websites and other academic accomplishments.</p>
        	
        	<ul id="carousel">
        		<li><a href="http://urcsc174.org/cfrederick/lab11/"><img src="assets/img/sites/words.jpg" alt="Blog" /></a></li>
        		<li><a href="http://urcsc170.org/cfrederick/lab09/"><img src="assets/img/sites/countries.jpg" alt="Countries" /></a></li>
        		<li><a href="http://www.kaplanedfoundation.org/the-program/meet-the-kaplan-scholars/chadrick-frederick/"><img src="assets/img/sites/kaplanart.jpg" alt="Kaplan Article" /></a></li>
        	</ul>
        </div>
    </section>

<?php include "inc/footer.inc"; ?>
        
        <!-- JavaScript includes - jQuery and our own script.js -->
		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<script src="assets/js/script.js"></script>
        
    </body>
</html>