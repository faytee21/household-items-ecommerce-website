<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>happy house</title>
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
		
		<!-- <a href="http://localhost/ecommerce%20website/admin/admin_login.php">admin</a> -->
		

		</nav>

	
</div>
<!--header ennds here-->
		

		<section class="home">
			<div class="main">
				<h3>QUALITY <span>BEST HOUSEHOLD</span> ITEMS</h3>
				
				<a href="shop.php" class="main-btn">SHOP NOW</a>		
			</div>
		</section>
		<section class="products">
			<h1 class="heading">Our Products</h1>
			<div class="box-container">

				<div class="box">
					<a href="shop.php">
					
					<img src="./gaspics/z8.jpg">
					<h3>Glasses</h3>
					</a>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
				<div class="box">
					
					<img src="./gaspics/z9.jpg">
					<h3>dinner sets</h3>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
				<div class="box">
					
					<img src="./gaspics/z13.jpg">
					<h3>mats</h3>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
				<div class="box">
					
					<img src="./gaspics/y3.jpg">
					<h3>dining table</h3>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					</div>
				<div class="box">
					
					<img src="./gaspics/a1.jpg">
					<h3>sofa sets</h3>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
				<div class="box">
					
					<img src="./gaspics/a12.jpg">
					<h3>beds</h3>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
				</div>
				<div class="box">
					
					<img src="./gaspics/a5.jpg">
					<h3>living room</h3>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					</div>
				<div class="box">
					
					<img src="./gaspics/z3.jpg">
					<h3>electronics</h3>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					</div>
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
		<script>
		let navbar=document.querySelector('.navbar');
		document.querySelector('#menu').onclick = () =>{
			navbar.classList.toggle('active')
		}
		window.onscroll = () =>{
			navbar.classList.remove('active')
		}
		</script>
	</body>
</html>