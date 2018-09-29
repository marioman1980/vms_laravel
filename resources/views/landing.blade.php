<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VMS Secure Payments</title>
        <link rel="stylesheet" media="all" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}"> -->
        <link rel="stylesheet" type="text/css" href="css/custom.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    </head>

    <body>
		<header class="navbar navbar-fixed-top navbar-default">
            <div class="container-fluid">
    	        <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>		
    			    <a id="logo" href="/"><img alt="VMS logo" src="/assets/title_small-9dd336ce15851b3a4cf900be38ee4aef2cb3c44719bd9565d8bd411ababf6e7b.png" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul id="nav-links" class="nav navbar-nav navbar-right header-align-bottom">
                        <li><a href="/">Home</a></li>
                        <li><a href="/help">Help</a></li>
    				    <li><a href="/contact">Contact</a></li>
                        <li><a href="#">Log in</a></li>
                    </ul>
                </div>
            </div>
        </header>

		<div id="page-container" class="container-fluid">   	
            <div class="parallax">
	            <div class="center jumbotron">
                    <h1>Welcome to VMS Secure Payments</h1>
                    <h2>Request and Receive Payments Securely</h2>
                    <a class="btn btn-lg btn-primary" href="/register">Create Account</a>
                </div>
            </div>
		</div>
		<footer class="footer container">
            <small>
                <a href="#">VMS Secure Payments.</a> Powered by <a href="https://www.stripe.com/">Stripe</a>
            </small>
            <nav>
                <ul class="navbar-right">
                    <small>
				        <li><a href="/help">Help</a></li>
				        <li><a href="/contact">Contact</a></li>
				        <li><a href="/privacy_policy">Privacy Policy</a></li>
                    </small>
                </ul>
            </nav>
        </footer>
    </body>
</html>
