<?php
	session_start();

    $_SESSION['message'] = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    if (isset($_POST['login'])){

			if(isset($_POST['password']) && isset($_POST['username'])){

				$username = trim($_POST['username']);
				$password = strip_tags($_POST['password']);

				$username = strip_tags($username);

				//password correspond to any in the database
				if($username == 'user' && $password == 'pass'){
					
					if(!empty($_POST['remember'])) {
						setcookie("username",$username,time()+ (60 * 60 * 24 * 90));
					}
					else {
						if(isset($_COOKIE["username"])) {
							setcookie("username", "");
						}
					}

					$_SESSION['username'] = $username;
					$_SESSION['sid'] = session_id();
					header("location: success-page.php");
				}
				else {
					$_SESSION['message'] = "Wrong Email or Password!";
				}
			}

	    }
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

	<title>Log in- Critics</title>

	<link rel="stylesheet" type="text/css" href="./style.css" />
	<link rel="stylesheet" type="text/css" href="./bootstrap.min.css" />
</head>
<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
		<div class="left-banner">
			<div class="left-banner-overlay-black"></div>
            <div class="left-banner-overlay-white"></div>
		</div>

		<div class="container">
			<div class="row">
				<div class="login-content">
					<h3>Reliance HMO Test</h3>
					
					<div style="color: red; font-size: 1.5em; margin-top: 1em; font-family: calibri; text-align: center;"> <?= $_SESSION['message']; ?></div>

					<div class="login-box">
						<form class="login-form" action="login.php" method="POST" enctype="multipart/form-data" autocomplete="off" style="font-family: consolas;">
								
							<input type="text" class="form-control" placeholder="Username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" autofocus required>

							<div class="password-wrapper">
								<input type="password" id="password-wrapper" class="form-control" placeholder="Password" name="password" required>
							</div>

							<input type="checkbox" name="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> > <font class="remember-me">Remember me. </font>

							<font class="terms">By logging in, you agree our Terms of Service and Privacy Policy.</a></font>

							<input type="submit" class="btn btn-block" value="Submit" name="login">
						</form>		
					</div>

				</div>
			</div>
		</div>

	</body>
</html>