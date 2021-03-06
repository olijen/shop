<?php
if(isset($routes[2])) {
	$s = strtolower($routes[2]);

	$get = strpos($s, "?search");
	if($get!==false) {
		$s = str_replace('?search=', '', $s);
		header('Location: /search/'.$s);
		die();
	}
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="/">
    <title>New People eStore</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/stars.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <header id="header">
            <div class="row">
                <div class="logo col-xs-12 col-sm-3">
                    <a href="main" class="main_page"></a>
                </div>

                <div class="col-xs-12 col-sm-2">
                </div>

                <div class="col-xs-12 col-sm-4 hidden-xs hidden-sm ">
                    <form action="search/" method="get" class="search">
						<input type="text" name="search" placeholder="Type to search..." class="form-control">
						<button type="submit" class="btn btn-info">Search</button>
					</form>
                </div>

                <div class="links hidden-xs col-sm-3">
                    News:
                    <a href="news/1">Welcome!</a>
                    <a href="news/2">We are working on it</a>
                    <a href="news/3">New features!</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <div class="nav bar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-xs" href="#">New people</a>
                            </div>
                            <div class="collapse navbar-collapse center" id="bs-example-navbar-collapse-1" >
                                <ul class="nav navbar-nav center-ul">
                                    <li><a href="catalog/phones">Phones</a></li>
                                    <li><a href="catalog/tablets">Tablets</a></li>
                                    <li><a href="catalog/laptops">Laptops</a></li>
                                    <li><a href="catalog/accessories">Accessories</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </header>
        <div class="content">
            <?php renderBlock($block, array('routes' => $routes)); ?>
        </div>
        <footer id="footer">
        	<div class="row">
				<div class="col-sm-3">
					<a href="main" class="footer_logo"></a>
				</div>
				<div class="col-sm-3">
					<ul class="footer_nav hidden-xs">
						<li><a href="catalog/phones">Phones</a></li>
						<li><a href="catalog/tablets">Tablets</a></li>
						<li><a href="catalog/laptops">Laptops</a></li>
						<li><a href="catalog/accessories">Accessories</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="footer_news hidden-xs">
						<span>News:</span>
						<li><a href="news/1">Welcome!</a></li>
						<li><a href="news/2">We are working on it</a></li>
						<li><a href="news/3">New features!</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="footer_contacts">
						<li>Tel.: 000-000-000</li>
						<li>E-mail: <a  href="mailto:#">info@newpeople.com</a></li>
					</ul>
					<div class="footer_copy ">
						<p>&copy; New People eStore | 2015</p>
					</div>
				</div>
            </div>
        </footer>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>