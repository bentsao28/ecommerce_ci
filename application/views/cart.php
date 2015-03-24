<html>
<head>
	<title>Cart and Checkout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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

	    	<a href="/"><img src="/assets/mbr.png" style="display: inline-block; width:80px; margin-top:10px;"></a>
	      
	      <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
	      	<li><a href="/main/login">Login</a></li>
	        <li><a href="/main/cart">Shopping Cart (5)</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div id="wrapper">
		<div class="cart">
			<table>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
				<tr>
					<td>Ramen</td>
					<td>1.99</td>
					<td>2 <a href="">Update |</a><a href="">Delete</a> </td>
					<td>2.98</td>
				</tr>
				<tr>
					<td>Ramen</td>
					<td>1.99</td>
					<td>2 <a href="">Update |</a><a href="">Delete</a> </td>
					<td>2.98</td>
				</tr>
				<tr>
					<td>Ramen</td>
					<td>1.99</td>
					<td>2 <a href="">Update |</a><a href="">Delete</a> </td>
					<td>2.98</td>
				</tr>
				<tr>
					<td>Ramen</td>
					<td>1.99</td>
					<td>2 <a href="">Update |</a><a href="">Delete</a> </td>
					<td>2.98</td>
				</tr>
			</table>
			<br>
			Grand total: $11.92<br>
			<a href="index.php">Continue Shopping</a>
		</div>

	<br><br>
		<div class="checkout">
			<h5>Shipping Information</h5><br>
			<label>First Name</lable>  <input type="text" name="first_name"><br>
			<label>Last Name</lable>  <input type="text" name="last_name"><br>
			<lable>Address</lable><br>
			<input type="text" name="address1"><br>
			<input type="text" name="address2"><br>
			<input type="text" name="city" placeholder="city"><br>
			<input type="number" name="zipcode" placeholder="zipcode"><br>
			<input type="text" name="state" placeholder="State"><br>
	<br><br>
			<h5>Billing Information</h5><br>
			<input type="checkbox" name="address" value="shipping-info">Same as Shipping<br><br>
			<label>First Name</lable>  <input type="text" name="first_name"><br>
			<label>Last Name</lable>  <input type="text" name="last_name"><br>
			<lable>Address</lable><br>
			<input type="text" name="address1"><br>
			<input type="text" name="address2"><br>
			<input type="text" name="city" placeholder="city"><br>
			<input type="number" name="zipcode" placeholder="zipcode"><br>
			<input type="text" name="state" placeholder="State"><br>

	<br><br>
			<h5>Payment Details</h5><br>
			<form action="" method="POST">
			  <script
			    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
			    data-amount="2000"
			    data-name="Demo Site"
			    data-description="2 widgets ($20.00)"
			    data-image="/128x128.png">
			  </script>
			</form>

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