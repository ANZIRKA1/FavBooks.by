<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9">
    <div class="container">
        <div class="row">

            <h4 class="h4 mt-5 mb-5 ">Редактировать заказ #<?=$id;?></h4>
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <label for="userName">Имя клиента</label>
                        <input class="form-control" type="text" name="userName" placeholder="" value="<?=$order['user_name']; ?>">

                        <label for="userPhone">Телефон клиента</label>
                        <input class="form-control" type="text" name="userPhone" placeholder="" value="<?=$order['user_phone']; ?>">

                        <label for="userEmail">Email клиента</label>
                        <input class="form-control" type="text" name="userEmail" placeholder="" value="<?=$order['user_email']; ?>">
                        <label for="userComment">Комментарий клиента</label>
                        <input class="form-control" type="text" name="userComment" placeholder="" value="<?=$order['user_comment']; ?>">

                        <label for="date">Дата оформления заказа</label>
                        <input class="form-control" id="date" type="text" name="date" placeholder="" value="<?=$order['date']; ?>">

                        <label for="status">Статус</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1" <? if ($order['status'] == 1) echo ' selected="selected"'; ?>>Новый заказ</option>
                            <option value="2" <? if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обработке</option>
                            <option value="3" <? if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставляется</option>
                            <option value="4" <? if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрыт</option>
                        </select>
                        <br>
                        <br>
                        <input  class="w-100 btn btn-lg btn-primary mb-5" type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

