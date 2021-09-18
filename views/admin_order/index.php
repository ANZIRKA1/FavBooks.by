<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9">
    <div class="container">
        <div class="row">

            <h4 class="h4 mt-5 mb-5">Список заказов</h4>


            
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Email покупателя</th>
                    <th>Комментарий покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?=$order->id; ?>">
                                <?=$order->id; ?>
                            </a>
                        </td>
                        <td><?=$order->user_name; ?></td>
                        <td><?=$order->user_phone; ?></td>
                        <td><?=$order->user_email; ?></td>
                        <td><?=$order->user_comment; ?></td>
                        <td><?=$order->date; ?></td>
                        <td><?=Order::getStatusText($order->status); ?></td>
                        <td><a href="/admin/order/view/<?=$order->id; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                        <td><a href="/admin/order/update/<?=$order->id; ?>" title="Редактировать"><i class="fas fa-pen-square"></i></a></td>
                        <td><a href="/admin/order/delete/<?=$order->id; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

