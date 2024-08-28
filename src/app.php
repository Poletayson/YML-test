<?php

namespace Src;

require_once "vendor/autoload.php";

use Bukashk0zzz\YmlGenerator\Model\Category;
use Bukashk0zzz\YmlGenerator\Model\Currency;
use Bukashk0zzz\YmlGenerator\Model\Offer\OfferCustom;
use Bukashk0zzz\YmlGenerator\Model\Offer\OfferSimple;
use Bukashk0zzz\YmlGenerator\Model\ShopInfo;
use Bukashk0zzz\YmlGenerator\Settings;
use Bukashk0zzz\YmlGenerator\Generator;
use Src\Data;

$shopInfo = (new ShopInfo())->setName('Бытовая техника')->setCompany("ООО 'Техника в дом'")->setUrl('http://www.tech_house.com/');

//Категории товаров
$categories = [];
foreach (Data::getCategories() as $categoryId => $category) {
    $categories[] = (new Category())
        ->setId($categoryId)
        ->setName($category);
}

//Валюты
$currencies = [];
$currencies[] = (new Currency())
    ->setId('RUB')
    ->setRate(1)
;

//Товары
$offers = [];
foreach (Data::getOffers() as $categoryId => $offer) {
    for ($i = 1; $i <= 45; $i++) {
        $offers[] = (new OfferSimple())
            ->setId("{$categoryId}_{$i}")
            ->setName("{$offer} {$i}")
            ->setPrice(rand(1500, 9999))
            ->setCategoryId($categoryId)
            ->setCurrencyId('RUB')
            ->setDelivery(true)
            ->setAvailable(true);
    }
}

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