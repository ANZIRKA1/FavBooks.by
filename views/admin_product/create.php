<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9">
    <div class="container">
        <div class="row">
            <h4 class="h4 mt-5">Добавить новую книгу</h4>
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

                        <label for="inputName">Название ниги</label>
                        <input class="form-control" id="inputName" type="text" name="name" placeholder="" value="">
                        <label for="inputName">Автор</label>
                        <input class="form-control" type="text" name="author" placeholder="" value="">

                        <label for="inputName">Стоимость, BYN</label>
                        <input class="form-control" type="text" name="price" placeholder="" value="">

                            <label for="inputImage">Изображение книги</label>
                        <img class="form-control" src="<?=$product['image'];?>" width="200" alt="" />
                        <input class="form-control"  accept=".png, .jpg, .jpeg" required type="file" name="image" value="">
                        <label for="inputDesc">Описание</label>
                        <textarea class="form-control" name="description"></textarea>
                        <p>Статус</p>
                        <select class="form-control" name="status">
                            <option value="1">Отображается</option>
                            <option value="0">Скрыт</option>
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

