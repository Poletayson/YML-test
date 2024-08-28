<?php

namespace Src;

use Bukashk0zzz\YmlGenerator\Model\Offer\OfferSimple;
use Src\Data\Data;
use Src\Data\DataHomeAppliances;

/**
 * Генератор товаров
 */
class OffersGenerator
{
    /**
     * Сгенерировать массив товаров
     * @param int $oneCategoryCount Количество товаров в каждой категории
     * @param Data $data Набор данных
     * @return array
     */
    public static function getOffers (int $oneCategoryCount, Data $data):array {
        $offers = [];
        foreach ($data::getOffers() as $categoryId => $offer) {
            for ($i = 1; $i <= $oneCategoryCount; $i++) {
                $id = "{$categoryId}_{$i}";
                $offers[] = (new OfferSimple())
                    ->setId("{$categoryId}_{$i}")
                    ->setName("{$offer} модели {$i}")
                    ->setPrice(rand(1500, 9999))
                    ->setCategoryId($categoryId)
                    ->setCurrencyId('RUB')
                    ->setUrl($data::getCompanyUrl() . "/offers/{$id}")
                    ->setDelivery(true)
                    ->setAvailable(true);
            }
        }
        return $offers;
    }
}