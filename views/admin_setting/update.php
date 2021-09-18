<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="col-sm-9 ">
    <div class="container">
        <div class="row">
            <h4 class="h4 mb-5 mt-5">Редактировать настройки сайта</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <label for="inputName">Назвние сайта</label>
                        <input class="form-control" id="inputName" type="text" name="name" placeholder="" value="<?=$setting['name']; ?>">
                        <label for="inputName">Телефон</label>
                        <input class="form-control" type="text" name="phone" placeholder="" value="<?=$setting['phone']; ?>">

                        <label for="inputName">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="" value="<?=$setting['email']; ?>">

                        <label for="inputImage">Логотип</label>
                        <img class="form-control" src="<?=$setting['logo'];?>" width="200" alt="" />
                        <input class="form-control"  accept=".png, .jpg, .jpeg" type="file" name="logo"  value="<?=$setting['logo'];?>">
                        
                        <input class="w-100 btn btn-lg btn-primary mb-5" type="submit" name="submit" value="Сохранить">

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

