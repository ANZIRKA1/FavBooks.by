<?php

/**
 * Контроллер AdminProductController
 * Управление товарами в админпанели
 */
class AdminProductController extends AdminBase
{

    /**
     * Action для страницы "Управление товарами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список товаров
        $productsList = Product::getProductsList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_product/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить товар"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список категорий для выпадающего списка
        $categoriesList = Category::getCategoriesListAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['author'] = $_POST['author'];
            $options['price'] = $_POST['price'];
            $options['status'] = $_POST['status'];
            $options['image'] = false;
            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['author'])
                || empty($options['price']) || empty($options['status'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет

                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    $path =  "/upload/images/books/".basename($_FILES["image"]["name"]);
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$path);
                    $options['image'] = $path;
                }
                // Добавляем новый товар
                Product::createProduct($options);
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/product");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_product/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать товар"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список категорий для выпадающего списка
        $categoriesList = Category::getCategoriesListAdmin();

        // Получаем данные о конкретном заказе
        $product = Product::getProductById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // При необходимости можно валидировать значения нужным образом
            if (!isset($_POST['name']) || empty($_POST['author'])
                || empty($_POST['price']) || empty($_POST['status'])) {
                $errors[] = 'Заполните поля';
            }
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = $_POST['name'];
            $options['author'] = $_POST['author'];
            $options['price'] = $_POST['price'];
            $options['status'] = $_POST['status'];
            $options['image'] = $product['image'];

            // Сохраняем изменения


                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    $path =  "/upload/images/books/".basename($_FILES["image"]["name"]);
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$path);
                    $options['image'] = $path;
                }

            Product::updateProductById($id, $options);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/product");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить товар"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Product::deleteProductById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/product");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_product/delete.php');
        return true;
    }

}
