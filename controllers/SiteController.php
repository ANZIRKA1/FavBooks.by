<?php

/**
 * Контроллер CartController
 */
class SiteController extends DefaultController
{

    /**
     * Action для главной страницы
     */
    
    public function actionIndex()
    {
        // Настройки сайта
        $setting = Setting::getSetting();

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
    /**
     * Action для страницы "Доставка"
     */
    public function actionDelivery()
    {
        // Настройки сайта
        $setting = Setting::getSetting();
        // Подключаем вид
        require_once(ROOT . '/views/site/delivery.php');
        return true;
    }

    /**
     * Action для страницы "Оплата"
     */
    public function actionPay()
    {
        // Настройки сайта
        $setting = Setting::getSetting();
        // Подключаем вид
        require_once(ROOT . '/views/site/pay.php');
        return true;
    }

}