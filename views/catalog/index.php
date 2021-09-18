<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="slider">
    <div class="container">
        <div class="slider_inner">
            <div class="slider_item">
                <div class="slider_title">
                    Библиотека FavBooks
                </div>
                <div class="slider_text">
                    Здесь вы можете найти интресующую Вас книгу и заказать её
                </div>
            </div>
        </div>
    </div>
</section>
<div class="books">
    <div class="container">
        <div class="books__wrap">
            <?php foreach ($products as $product): ?>
            <div  class="book__item">
                <h3 class="book__name"><?=$product->name?></h3>
                <h4 class="book__author"><?=$product->author?></h4>
                <a href="product/<?=$product->id?>"> <img class="book__image" src="<?=$product->image?>" alt=""></a>
                <p class="book__price"><?=$product->price?> руб</p>
                <a href="/cart/add/<?=$product->id?>" data-id="<?=$product->id?>" class="btn btn-default book__btn">Добавить в корзину</a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
</body>

</html>