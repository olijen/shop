<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="/">
    <title>Bootstrap 101 Template</title>

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
            </div>
            <nav id="nav">
                <ul class="nav_list">
                    <li class="list_item"><a href="#" class="li_link">Phones</a></li>
                    <li class="list_item"><a href="#" class="li_link">Tablets</a></li>
                    <li class="list_item"><a href="#" class="li_link">Laptops</a></li>
                    <li class="list_item"><a href="#" class="li_link">Accessories</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <?php renderBlock($block, array('routes' => $routes)); ?>
        </div>
        <div class="footer">

                <div id="footerLogo"></div>

                <div id="footerMenu1">
                    <ul>
                        <li><a href="#">Phones</a></li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>

                <div id="footerMenu2">
                    <ul>
                        <li><a href="#">Phones</a></li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>

            <div id="footerContacts">
                <p>Tel.: 000-000-000<br />
                E-mail:<a>Aaaaa@mail.ua</a>
                </p>
            </div>

                <div id="footerCopyright">
                    <p>© Test Shop 2015</p>
                </div>

        </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>