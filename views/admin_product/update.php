<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9 ">
    <div class="container">
        <div class="row">
            <h4 class="h4 mb-5 mt-5">Редактировать книгу #<?=$id; ?></h4>

            <br/>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <label for="inputName">Название книги</label>
                        <input class="form-control" id="inputName" type="text" name="name" placeholder="" value="<?=$product['name']; ?>">
                        <label for="inputName">Автор</label>
                        <input class="form-control" type="text" name="author" placeholder="" value="<?=$product['author']; ?>">

                        <label for="inputName">Стоимость, BYN</label>
                        <input class="form-control" type="text" name="price" placeholder="" value="<?=$product['price']; ?>">

                            <label for="inputImage">Изображение книги</label>
                        <img class="form-control" src="<?=$product['image'];?>" width="200" alt="" />
                        <input class="form-control"  accept=".png, .jpg, .jpeg" type="file" name="image" value="">
                        <label for="inputDesc">Описание</label>
                        <textarea class="form-control" name="description"><?=$product['description']; ?></textarea>
                        <p>Статус</p>
                        <select class="form-control" name="status">
                            <option value="1" <? if($product['status'] == 1) ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <? if($product['status'] == 0) ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input class="w-100 btn btn-lg btn-primary mb-5" type="submit" name="submit" value="Сохранить">

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

