<!DOCTYPE html>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="wrapper">
        <div id="header">
            <div class="top_line">
                <div class="logo">
                    <a href="main" class="main_page"></a>
                </div>
				<div class="links">
					News:
					<a href="#welcome" target="_blank">Welcome!</a>
					<a href="#we-are-working-on-it" target="_blank">We are working on it</a>
					<a href="#new-features" target="_blank">New features!</a>
				</div>
            </div>
            <nav id="nav">
                <ul class="nav_list">
                    <li class="list_item"><a href="catalog/phones" class="li_link">Phones</a></li>
                    <li class="list_item"><a href="catalog/tablets" class="li_link">Tablets</a></li>
                    <li class="list_item"><a href="catalog/laptops" class="li_link">Laptops</a></li>
                    <li class="list_item"><a href="catalog/accessories" class="li_link">Accessories</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <?php renderBlock($block, array('routes' => $routes)); ?>
        </div>
        <div class="footer">

                <div id="footerLogo">
                    <a href="main" class="main_page"></a>
                </div>

                <div id="footerMenu1">
                    <ul>
                        <li><a href="catalog/phones">Phones</a></li>
                        <li><a href="catalog/tablets">Tablets</a></li>
                        <li><a href="catalog/laptops">Laptops</a></li>
                        <li><a href="catalog/accessories">Accessories</a></li>
                    </ul>
                </div>

                <div id="footerMenu2">
                    <ul>
                        <li>News:</li>
                        <li><a href="#welcome" target="_blank">Welcome!</a></li>
                        <li><a href="#we-are-working-on-it" target="_blank">We are working on it</a></li>
                        <li><a href="#new-features" target="_blank">New features!</a></li>
                    </ul>
                </div>

            <div id="footerContacts">
                <p>Tel.: 000-000-000<br />
                E-mail: <a>info@newpeople.com</a>
                </p>
            </div>

                <div id="footerCopyright">
                    <p>&copy; New People eStore | 2015</p>
                </div>

        </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>