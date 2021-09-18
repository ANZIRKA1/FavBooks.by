<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 80vh">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <main class="form-signup">
                        <form method="post">
                            <h1 class="h3 mb-3 fw-normal text-center">Редактирование данных</h1>
                            <label for="inputName" class="visually-hidden">Email</label>
                            <input type="text" name="name" id="inputName" class="form-control" placeholder="Имя" value="<?php echo $name; ?>" required="" autofocus="">
                            <label for="inputEmail" class="visually-hidden">Email</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" value="<?php echo $email; ?>" required="" autofocus="">
                            <label for="inputPassword" class="visually-hidden">Пароль</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" value="<?php echo $password; ?>" placeholder="Пароль" required="">
                            <input type="submit" name="submit"  class="w-100 btn btn-lg btn-primary mt-3" value="Сохранить" />
                            <p class="mt-5 mb-3 text-muted">© 2021</p>
                        </form>
                    </main>
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>
