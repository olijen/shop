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
    <div class="container-fluid">
        <header id="header" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 logo">
                                <a href="main" class="main_page"></a>
                            </div>
                            <div class="links col-xs-12 col-sm-6 col-md-6">
                                Breaking News:
                                <a href="http://live.ukrainianiphone.com/" target="_blank">Apple live presentation of iPhones 6S by UiP</a>
                                <a href="http://ukrainianiphone.com/2015/09/apple-store-close/" target="_blank">Apple Online Store is offline</a>
                                <a href="http://ukrainianiphone.com/2015/08/torrents-block-windows-10/" target="_blank">Torrents blocking Windows 10 users</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12">
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
            </div>
        </header>


















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
                        <li>Breaking News:</li>
                        <li><a href="http://live.ukrainianiphone.com/" target="_blank">Apple live presentation of iPhones 6S by UiP</a></li>
                        <li><a href="http://ukrainianiphone.com/2015/09/apple-store-close/" target="_blank">Apple Online Store is offline</a></li>
                        <li><a href="http://ukrainianiphone.com/2015/08/torrents-block-windows-10/" target="_blank">Torrents blocking Windows 10 users</a></li>
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