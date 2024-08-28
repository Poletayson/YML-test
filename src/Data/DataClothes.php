<?php

namespace Src\Data;

/**
 * Набор для магазина одежды
 */
class DataClothes extends Data
{
    protected static string $shopName = 'Моя одежда';
    protected static string $companyName = "ООО 'Моя одежда'";
    protected static string $companyUrl = 'http://www.my-clothes.com/';

    protected static array $categories = [
        53544650 => 'одежда, обувь и аксессуары / одежда для взрослых / брюки',
        53543980 => 'одежда, обувь и аксессуары / одежда для взрослых / джинсы',
        53545759 => 'одежда, обувь и аксессуары / одежда для взрослых / костюмы',
        53546086 => 'одежда, обувь и аксессуары / одежда для взрослых / шорты',
    ];

    protected static array $offers = [
        16302535 => 'Брюки',
        90586 => 'Джинсы',
        90600 => 'Костюм',
        90595 => 'Шорты',
    ];
}