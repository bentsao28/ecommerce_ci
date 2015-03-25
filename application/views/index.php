<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MBR Foods</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	})
	</script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <!-- <div class="navbar-header">
	      <a class="navbar-brand" href="/">MBR Foods</a>
	    </div> -->

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      	<!-- <ul class="nav navbar-nav navbar-left">
	        	<li><a href="login.php">Login</a></li>
	    	</ul> -->

	    	<img src="assets/mbr.png" style="display: inline-block; width:80px; margin-top:10px;">
	      
	      <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
	      	<li><a href="/main/login">Welcome (<?= $this->session->userdata('user_fname')  ?> <?= $this->session->userdata('user_lname')  ?>)</a></li>
	        <li><a href="/main/cart">Shopping Cart (<?= $this->session->userdata('cart')['total_items'] ?>)</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div id="wrapper">
		<div class="container">
			<div class="navigation-and-search">
				<ul id="menu">
			        <li><a href="#">Specials</a></li>
			        <li class="dropdown">
			          <a href="/main/products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products<span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="/main/product_category">All Products</a></li>
			            <li><a href="/main/sort/2">Candy</a></li>
			            <li><a href="/main/sort/1">Snacks</a></li>
			            <li><a href="/main/sort/3">Ready to Eat</a></li>
			            <li><a href="/main/sort/6">Fruits and Veggies</a></li>
			            <li><a href="/main/sort/5">Meats</a></li>
			            <li><a href="/main/sort/4">Spices and Sauces</a></li>
			          </ul>
			        </li>
			        <li><a href="#">New Arrivals</a></li>
			      </ul> 

			    <form class="navbar-form navbar-right" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
	 		 </div>
	 		 <br>
			<div class="jumbotron">
			  <h1>Today Only!</h1>
			  <p>Sale on Nongshim Instant Ramen!</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
			<div class="row">
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://www.hearkencreative.com/wp-content/uploads/2012/01/japan-matcha-green-tea-kitkat-1024x784.jpg" alt="...">
			      <div class="caption">
			        <h3>Green Tea Kit Kat</h3>
			        <p>Imported from Japan! All the goodness of kit kats with green tea flavor!</p>
			        <p><a href="productview.php" class="btn btn-primary" role="button">Learn More</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://www.weavernut.com/assets/images/wncprod/SM2574.jpg" alt="...">
			      <div class="caption">
			        <h3>Gems by Cadbury's</h3>
			        <p>Straight from India, poor imitation of m&ms</p>
			        <p><a href="productview.php" class="btn btn-primary" role="button">Learn More</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://mall.coimbatore.com/chocolates/fivestar.jpg" alt="...">
			      <div class="caption">
			        <h3>Cadbury's FiveStar</h3>
			        <p>Better than Mars Bars!</p>
			        <p><a href="productview.php" class="btn btn-primary" role="button">Learn More</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail">
			      <img src="http://www.paddysnax.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/img_02971.jpg" alt="...">
			      <div class="caption">
			        <h3>McVities Chocolate Digestives</h3>
			        <p>Digestives with a layer of milk chocolate. Yummy!!</p>
			        <p><a href="productview.php" class="btn btn-primary" role="button">Learn More</a> <a href="#" class="btn btn-default" role="button">Add to Cart</a></p>
			      </div>
			    </div>
			  </div>
			  


			</div>
		</div>
	<footer class="footer">
	 	<ul>
	 		<li><a href="">Terms and Conditions</a></li>
	 		<li><a href="">Privacy Policy</a></li>
	 		<li><a href="">About Us</a></li>
	 		<li><a href="">Contact</a></li>
	 	</ul>
	 	<h5 style="color: gray;">Copyright &copy 2015 MBR Foods Pvt. Ltd.</h5>
	</footer>
	</div>
</body>
</html>