<?php

namespace Sirian\YMLParser\Factory;

use Sirian\YMLParser\Category;
use Sirian\YMLParser\Currency;
use Sirian\YMLParser\Exception\UnsupportedOfferTypeException;
use Sirian\YMLParser\Offer\BookOffer;
use Sirian\YMLParser\Offer\VendorModelOffer;
use Sirian\YMLParser\Param;
use Sirian\YMLParser\Shop;

class Factory
{
    public function createShop()
    {
        return new Shop();
    }

    public function createParam()
    {
        return new Param();
    }

    public function createCategory()
    {
        return new Category();
    }

    public function createCurrency()
    {
        return new Currency();
    }

    public function createOffer($type)
    {
        switch ($type) {
            case 'vendor.model':
                return new VendorModelOffer();
            case 'book':
                return new BookOffer();
            default:
                throw new UnsupportedOfferTypeException();
        }
    }
}
