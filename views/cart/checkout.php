<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 80vh">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>


                    <?php if ($result): ?>
                        <p class="h4">Заказ оформлен. В скором времени с Вами свяжется менеджер для уточнения данных заказа.</p>
                    <?php else: ?>

                        <p class="h5">Выбрано товаров: <?php echo $totalQuantity; ?>.</p>
                        <p class="h5">На сумму: <?php echo $totalPrice; ?> BYN</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p class="h5">Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post">
                                        <label for="inputName" class="visually-hidden">Ваше имя</label>
                                        <input type="text" name="userName" id="inputName" class="form-control" placeholder="Ваше имя" value="<?php echo $userName; ?>"/>
                                        <label for="userEmail" class="visually-hidden">Email</label>
                                        <input type="tel" name="userEmail" id="userPhone" class="form-control" placeholder="Email" value="<?php echo $userEmail; ?>"/>
                                        <label for="userPhone" class="visually-hidden">Номер телефона</label>
                                        <input type="tel" name="userPhone" id="userPhone" class="form-control" placeholder="Номер телефона" value="<?php echo $userPhone; ?>"/>
                                        <label for="userComment" class="visually-hidden">Комментарий к заказу</label>
                                        <textarea type="text" name="userComment" id="userComment" class="form-control" placeholder="Сообщение"><?php echo $userComment; ?></textarea>
                                        <input type="submit" name="submit" class="w-100 btn btn-lg btn-primary mt-3" value="Оформить" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>