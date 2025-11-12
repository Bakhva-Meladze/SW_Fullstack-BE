<?php

namespace App\types;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class CategoryType extends ObjectType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'Category',
            'limit' => Type::int(),

            'fields' => [
                'name' => Type::string(),
            ],
        ]);
    }
}