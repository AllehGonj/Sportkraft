
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportKraft | Tu tienda deportiva desde casa, con un sólo click</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon">
    
</head>
<body>

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700" rel="stylesheet">
    <style>
        html, body{
            font-family: Verdana,sans-serif;
        }
    </style>
    <header>
        <div class="main_title">
            <h3><?=$page_title?></h3>
        </div>
        <section class="main_header">
            <div id="social_links">
                <div class="social_icons">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                </div>
                <div class="social_links__buttons">
                    <a href="">Inicio</a>
                    <a href="">Registro</a>
                </div>
            </div>
            <div id="main_description">
                <div>
                    <img src="img/animal.png" alt="">
                    <h1><?=$page_title?></h1> 
                </div>
                <h2>Tu tienda deportiva desde casa, con un sólo click.</h2>
            </div>
        </section>
        <div id="main__nav_section">
                <div id="principal__menu">
                    <nav>
                        <ul>
                            <li><a href="index.php" id="home_btn" style="padding: 15px 10px;">Inicio</a></li>
                            <li><a href="mens.php" style="padding: 15px 10px;">Hombres</a>
                                <ul>
                                    <li><a href="mens.php">Chaquetas</a></li>
                                    <li><a href="mens.php">Camisas</a></li>
                                    <li><a href="mens.php">Pantalones</a></li>
                                    <li><a href="mens.php">Calzado</a></li>
                                    <li><a href="mens.php">Accesorios</a></li>
                                </ul>
                            </li>
                            <li><a href="women.php" style="padding: 15px 10px;">Mujeres</a>
                            <ul>
                                <li><a href="women.php">Chaquetas</a></li>
                                <li><a href="women.php">Camisas</a></li>
                                <li><a href="women.php">Pantalones</a></li>
                                <li><a href="women.php">Calzado</a></li>
                                <li><a href="women.php">Accesorios</a></li>
                            </ul>
                            </li>
                            <li><a href="kids.php" style="padding: 15px 10px;">Niños</a>
                                <ul>
                                    <li><a href="kids.php">Chaquetas</a></li>
                                    <li><a href="kids.php">Camisas</a></li>
                                    <li><a href="kids.php">Pantalones</a></li>
                                    <li><a href="kids.php">Calzado</a></li>
                                    <li><a href="kids.php">Accesorios</a></li>
                                </ul>
                            </li>
                            <li><a href="brands_section.php" style="padding: 15px 10px;">Marcas</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="search_icon">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" name="search" placeholder="Buscar" style="border: none;
                        font-size: 0.7rem;">
                </div>
            </div>
    </header>