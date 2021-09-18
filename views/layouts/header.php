<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/normalize.css">
    <link rel="stylesheet" href="/template/css/fonts.css">
    <link rel="stylesheet" href="/template/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/template/css/style.css">
    <title><?=$setting['name']?></title>
</head>

<body>
<header class="header">
    <div class="header_top">
        <div class="container">
            <div class="header_contacts">
                <a class="header_phone" href="tel:<?=$setting['phone']?>"><?=$setting['phone']?></a>
                <a class="header_email" href="mailto:<?=$setting['email']?>"><?=$setting['email']?></a>
                <a href="/cart" class="header_btn"><i class="fa fa-shopping-cart"></i> Моя корзина</a>
                <?php if(!User::isGuest()):?>
                    <a href="/cabinet" class="mr-3 header_user header_btn"><i class="fa fa-user"></i> <?=$_SESSION['user']['name']?></a>
                <?php else: ?>
                    <a href="/user/login" class="mr-3 header_user header_btn"><i class="fa fa-user"></i> Аккаунт</a>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="header_content">
        <div class="container">
            <div class="header_content-inner">
                <?php if($setting['logo']):?>
                    <img src="<?=$setting['logo']?>" alt="logotype">
                <?php else:?>
                    <h1 class="name">FavBooks</h1>
                <?php endif;?>
                <nav class="menu">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog">Библиотека</a></li>
                        <li><a href="/delivery">Доставка</a></li>
                        <li><a href="/pay">Оплата</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>