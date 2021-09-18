<?php

/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class CatalogController extends DefaultController
{

    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex()
    {
        // Настройки сайта
        $setting = Setting::getSetting();
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $products = Product::getProductsList();

        // Подключаем вид
        return require_once(ROOT . '/views/catalog/index.php');
    }

    /**
     * Action для страницы "Категория товаров"
     */
    public function actionCategory($categoryId, $page = 1)
    {
        // Настройки сайта
        $setting = Setting::getSetting();
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список товаров в категории
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Product::getTotalProductsInCategory($categoryId);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }

}