<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="pt-5" >
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 80vh">

            <div class="col-sm-4 col-sm-offset-4 padding-right ">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <main class="form-signin">
                    <form method="post">
                        <h1 class="h3 mb-3 fw-normal text-center">Авторизация</h1>
                        <label for="inputEmail" class="visually-hidden">Email</label>
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required="" autofocus="">
                        <label for="inputPassword" class="visually-hidden">Пароль</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
                        <input type="submit" name="submit"  class="w-100 btn btn-lg btn-primary mt-3" value="Вход" />
                        <a href="/user/register" class="w-100 h5 mt-3 text-center">Регистрация</a>
                        <p class="mt-5 mb-3 text-muted">© 2021</p>
                    </form>
                </main>
            </div>
        </div>
    </div>
</section>

</body>

</html>