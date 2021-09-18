<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9">
    <div class="container">
        <div class="row justify-content-center">

            <h4 class="h4 mt-5 mb-5">Просмотр заказа #<?php echo $order['id']; ?></h4>
            <h5 class="h5">Информация о заказе</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Номер заказа</td>
                    <td><?=$order['id']; ?></td>
                </tr>
                <tr>
                    <td>Имя клиента</td>
                    <td><?=$order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клиента</td>
                    <td><?=$order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Email клиента</td>
                    <td><?=$order['user_email']; ?></td>
                </tr>
                <tr>
                    <td>Комментарий клиента</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клиента</td>
                        <td><?= $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td><?=Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?=$order['date']; ?></td>
                </tr>
            </table>

            <h5 class="h5">Товары в заказе</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул книги</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product->id; ?></td>
                        <td><?php echo $product->author; ?></td>
                        <td><?php echo $product->name; ?></td>
                        <td><?php echo $product->price; ?>BYN</td>
                        <td><?php echo $productsQuantity[$product->id]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/admin/order/" class="btn btn-outline-primary w-25 back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

