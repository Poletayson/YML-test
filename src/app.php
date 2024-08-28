<?php

namespace Src;

require_once "vendor/autoload.php";

use Bukashk0zzz\YmlGenerator\Generator;
use Bukashk0zzz\YmlGenerator\Model\Category;
use Bukashk0zzz\YmlGenerator\Model\Currency;
use Bukashk0zzz\YmlGenerator\Model\ShopInfo;
use Bukashk0zzz\YmlGenerator\Settings;
use Src\Data\DataClothes;
use Src\Data\DataHomeAppliances;

$dataset = new DataClothes();

$shopInfo = (new ShopInfo())
    ->setName($dataset::getShopName())
    ->setCompany($dataset::getCompanyName())
    ->setUrl($dataset::getCompanyUrl());

//Категории товаров
$categories = [];
foreach ($dataset::getCategories() as $categoryId => $category) {
    $categories[] = (new Category())
        ->setId($categoryId)
        ->setName($category);
}

//Валюты
$currencies = [];
$currencies[] = (new Currency())
    ->setId('RUB')
    ->setRate(1);

//Товары
$offers = OffersGenerator::getOffers(40, $dataset);   //Генерируем

$settings = (new Settings())
    ->setOutputFile('output/results.xml')
    ->setEncoding('UTF-8');

if (!file_exists('output')) {
    mkdir('output');
}
(new Generator($settings))->generate(
    $shopInfo,
    $currencies,
    $categories,
    $offers,
    []
);