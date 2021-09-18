<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9">
    <div class="container">
        <div class="row">
            <h4 class="h4 mt5 mb-5">Настройки сайта</h4>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>Логотип</th>
                    <th>Название</th>
                    <th>Номер телефона</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="text-center"><img src="<?=$setting['logo']; ?>" alt="logotype"></td>
                    <td class="text-center"><?=$setting['name']; ?></td>
                    <td class="text-center"><?=$setting['phone']; ?></td>
                    <td class="text-center"><?=$setting['email']; ?></td>
                    <td class="text-center"><a href="/admin/setting/update"  title="Редактировать"><i class="fas fa-pen-square"></i></a></td>
                </tr>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

