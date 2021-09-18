<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9">
    <div class="container">
        <div class="row">
            <a href="/admin/product/create" class="w-100 btn btn-lg btn-primary mt-5 mb-5"><i class="fa fa-plus"></i> Добавить книгу</a>
            
            <h4>Список книг</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID книги</th>
                    <th>Автор</th>
                    <th>Название книги</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td class="text-center"><?php echo $product->id; ?></td>
                        <td class="text-center"><?php echo $product->author; ?></td>
                        <td class="text-center"><?php echo $product->name; ?></td>
                        <td class="text-center"><?php echo $product->price; ?> BYN</td>
                        <td class="text-center"><a href="/admin/product/update/<?php echo $product->id; ?>"  title="Редактировать"><i class="fas fa-pen-square"></i></a></td>
                        <td class="text-center"><a href="/admin/product/delete/<?php echo $product->id; ?>"  title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

