<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY HOUSE</title>
    <link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="css/style.css">
		<!--fontawesome cdn-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!----header starts here-->
<div class="header">
	<a href="#" class="name">HAPPY HOUSE</a>

	<nav class="navbar">
		<a href="home.php" class="active">Home</a>
		<a href="about.php">About Us</a>
		<a href="orders.php">orders</a>
		<a href="shop.php">shop</a>
		<a href="user_login.php">signup</a>
		<a href="contact.php">Contact us</a>
		
		<a href="http://localhost/ecommerce%20website/admin/admin_login.php">admin</a>
		

	</nav>

	
</div>
<!--header ennds here-->

<!--home section-->

<section class="homee" id="homee">
            <div class="content">
                <h3>VARIETY OF THE BEST HOUSEHOLD ITEMS TO CHOOSE FROM</h3>
                <p>Ous shop contains the various items our customers may need from furniture to cutlery to electronics</p>
                <p>Make your orders just at the comfort of your home and have it delivered on your doorstep.</p>
                <a href="shop.php" class="btn">Order now</a>
            </div>
            <div class="imagee">
                <img src="./gaspics/y1.jpg">
            </div>
        </section>

        <!-- <footer>
	<div class="container">
		<div class="footer-cont">
			<h4>ABOUT US</h4>
			<p>A certified e-commerce website where you can buy all gas <br> equipments at the comfort of your home</p>
		</div>
		<div class="footer-cont">
			<h4>QUICK LINKS</h4>
			<a href="home.php">Home</a>
			<a href="shop.php">Shop</a>
			<a href="orders.php">Orders</a>
			<a href="signup.php">Signup</a>
		</div>
		<div class="footer-cont">
			<h4>MAIN MENU</h4>
			<a href=".">Blogs</a>
			<a href="">Gallery</a>
			<a href="">Customer signup</a>
			
			<a href="">customer signin</a>
		</div>
		<div class="footer-cont">
			<h4>Newsletter</h4>
			<p>Follow us on social media for latest updates.</p>
			<form method="post">
			<div class="footer-newsletter">
					<input type="email" name="email" placeholder="Enter email" required>
					<button name="subscribe">Send</button>
			</div>
		</form>
		</div>
	</div>
</footer> -->

<?php include 'components/footer.php'; ?>
</body>
</html>