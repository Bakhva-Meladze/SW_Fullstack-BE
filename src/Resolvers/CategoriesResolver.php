<?php

namespace App\Resolvers;

use App\model\Category;

class CategoriesResolver
{
    public static function index(): array
    {  echo "( categoryResolver ) ";
        return Category::all();// Fetch data
    }
}