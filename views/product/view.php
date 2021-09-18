<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <p></p>
                                    <img style="width: 50%; max-height: 700px" src="<?=$product['image']?>" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <p></p>
                                <div class="product-information"><!--/product-information-->
                                    <h3>Название: <?=$product['name']; ?></h3>
                                    <h3>Автор: <?=$product['author']; ?></h3>
                                    <span>
                                    <span><?=$product['price'];?> руб</span>
                                   
                                   <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i> В корзину</a>
                                    
                                </span>
                                </div><!--/product-information-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <br/>
                                <h5>«Идио́т» (рус. дореф. Идiотъ) — роман Фёдора Михайловича Достоевского, впервые опубликованный в номерах журнала «Русский вестник» за 1868 год. Являлся одним из самых любимых произведений писателя, наиболее полно выразившим и нравственно-философскую позицию Достоевского, и его художественные принципы в 1860-х годах. Замысел романа обдумывался писателем во время пребывания за границей — в Германии и Швейцарии.</h5>
                                <?php echo $product['description']; ?>
                            </div>
                        </div>
                    </div><!--/product-details-->

                </div>
            </div>
        </div>
    </section>