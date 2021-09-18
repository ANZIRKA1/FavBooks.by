<?php


/**
 * Контроллер AdminSettingController
 * Управление насройками сайта в админпанели
 */
class AdminSettingController extends AdminBase
{
    /**
     * Action для страницы "Управление сайтом"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем настройки
        $setting = Setting::getSetting();
        // Подключаем вид
        require_once(ROOT . '/views/admin_setting/index.php');
        return true;
    }
    /**
     * Action для страницы "Редактировать товар"
     */
    public function actionUpdate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем настройки
        $setting = Setting::getSetting();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['logo'] = $setting['logo'];
            $options['name'] = $_POST['name'];
            $options['phone'] = $_POST['phone'];
            $options['email'] = $_POST['email'];

            // Проверим, загружалось ли через форму изображение
            if (is_uploaded_file($_FILES["logo"]["tmp_name"])) {
                $path =  "/upload/images/".basename($_FILES["logo"]["name"]);
                // Если загружалось, переместим его в нужную папке, дадим новое имя
                move_uploaded_file($_FILES["logo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$path);
                $options['logo'] = $path;
            }
            // Сохраняем изменения
            Setting::updateSetting($options);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/setting");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_setting/update.php');
        return true;
    }
}