<?php
namespace Src\Data;

class Data
{
    protected static string $shopName = '';
    protected static string $companyName = '';
    protected static string $companyUrl = '';

    protected static array $categories = [];

    protected static array $offers = [];

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
        return static::$offers;
    }

    /**
     * @return string
     */
    public static function getShopName(): string
    {
        return static::$shopName;
    }

    /**
     * @return string
     */
    public static function getCompanyName(): string
    {
        return static::$companyName;
    }

    /**
     * @return string
     */
    public static function getCompanyUrl(): string
    {
        return static::$companyUrl;
    }
}