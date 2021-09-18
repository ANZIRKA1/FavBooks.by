<?php

/**
 * Класс Setting - модель для работы с заказами
 */
class Setting
{
    /**
     * Настройки сайта
     * @return array <p>Настройки сайта</p>
     */
    public static function getSetting()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM `setting`");
        return $result->fetch();
    }

    /**
     * Редактирует заказ с заданным id
     * @param array $options <p>Данные</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateSetting($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE `setting`
            SET 
                `logo` = :logo, 
                `name` = :name, 
                `phone` = :phone, 
                `email` = :email";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':logo', $options['logo'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':phone', $options['phone'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        return $result->execute();
    }

}