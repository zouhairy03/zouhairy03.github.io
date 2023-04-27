


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="getstarted.css">
</head>
<body>
<h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="getstartedcheck.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-google"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-linkedin"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name"  name="name" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="http://localhost/my%20project/homepage.php#services" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
            <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-google"></i></a>
				<a href="#" class="social"><i class="fa-brands fa-linkedin"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" required />
			<input type="password" placeholder="Password"  required/>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
            <a href="index.php" class="backBtn" style="text-align:center;margin-left:0px">Go Back to Home</a>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
    <script src="getstarted.js"></script>
 
</body>
</html>