<?php

namespace App\Resolvers;

use App\model\Products;

class ProductResolver
{
    public static function products($category,$limit)
    {
        return Products::products($category,$limit);
    }

    public static function product($id)
    {
        return Products::product($id);
    }
    public static function searchProducts($search){
        return Products::searchProducts($search);

    }
}