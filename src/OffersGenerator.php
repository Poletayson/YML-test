<?php

namespace Src;

use Bukashk0zzz\YmlGenerator\Model\Offer\OfferSimple;

/**
 * Генератор товаров
 */
class OffersGenerator
{
    /**
     * Сгенерировать массив товаров
     * @param int $oneCategoryCount Количество товаров в каждой категории
     * @return array
     */
    public static function getOffers (int $oneCategoryCount):array {
        $offers = [];
        foreach (Data::getOffers() as $categoryId => $offer) {
            for ($i = 1; $i <= $oneCategoryCount; $i++) {
                $id = "{$categoryId}_{$i}";
                $offers[] = (new OfferSimple())
                    ->setId("{$categoryId}_{$i}")
                    ->setName("{$offer} {$i}")
                    ->setPrice(rand(1500, 9999))
                    ->setCategoryId($categoryId)
                    ->setCurrencyId('RUB')
                    ->setUrl(Data::getCompanyUrl() . "/offers/{$id}")
                    ->setDelivery(true)
                    ->setAvailable(true);
            }
        }
        return $offers;
    }
}