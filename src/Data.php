<?php
namespace Src;

class Data
{
    private static string $shopName = 'Бытовая техника';
    private static string $companyName = "ООО 'Техника в дом'";
    private static string $companyUrl = 'http://www.tech_house.com/';

    private static array $categories = [
        16302535 => 'бытовая техника / техника для дома / техника для уборки / пылесосы для дома',
        90586 => 'бытовая техника / мелкая техника для кухни / приготовление напитков / электрочайники и термопоты',
        90600 => 'бытовая техника / мелкая техника для кухни / приготовление блюд / хлебопечки',
        90595 => 'бытовая техника / мелкая техника для кухни / приготовление блюд / микроволновые печи',
    ];

    private static array $offers = [
        16302535 => 'Пылесос модели',
        90586 => 'Электрочайник модели',
        90600 => 'Хлебопечка модели',
        90595 => 'Микроволновая печь модели',
    ];

    /**
     * Получить категории товаров
     * @return array
     */
    public static function getCategories(): array
    {
        return static::$categories;
    }

    /**
     * Получить список товаров
     * @return array
     */
    public static function getOffers(): array
    {
        return self::$offers;
    }

    /**
     * @return string
     */
    public static function getShopName(): string
    {
        return self::$shopName;
    }

    /**
     * @return string
     */
    public static function getCompanyName(): string
    {
        return self::$companyName;
    }

    /**
     * @return string
     */
    public static function getCompanyUrl(): string
    {
        return self::$companyUrl;
    }


}