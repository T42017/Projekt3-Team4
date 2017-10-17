<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Bibliomania</title>
</head>
<body>
	<div class="hole-page">	
			<?php include 'importheader.php' ?>

	    <div class="col-1">
	    	<h1 class="h1top5">Top 5 books</h1>
	    	<div class="imgcontainertop5">
		  		<img class="img-top5" src="Top5books.jpg" alt="Top 5">	
		  		<div class="pcontainer">
		  			<p class="desc">Check out our top 5 hits!</p>
		  		</div>
		  	</div>
	    </div>
	    <div class="col-2">
	    	<h1 class="h1allbooks">All books</h1>
	    	<div class="imgcontainerallbooks">
	    		<a href="allbooks.php">
		  			<img class="img-allbooks" src="Allbooks.jpg" alt="All Books">
		  			<div class="pcontainer">
		  				<p class="desc">Look at our huge variety of books!</p>
		  			</div>
		  		</a>
		  	</div>
	    </div>
	    <div class="col-3">
	    	<h1 class="h1borrowbook">Borrow</h1>
	    	<div class="imgcontainerborrowbooks">
		  		<img class="img-borrowbooks" src="Borrowbook.jpg" alt="Borrow Books">
		  		<div class="pcontainer">
		  			<p class="desc">Borrow one of our books!</p>
		  		</div>
		  	</div>
		</div>
	</div>
</body>
</html>