<?php

namespace App\types;

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;

class OrderItemInputType extends InputObjectType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'OrderItemInput',
            'fields' => [
                'productId' => ['type' => Type::nonNull(Type::string())],
                'quantity' => ['type' => Type::nonNull(Type::int())],
                'name' => ['type'=>Type::string()],
                'attributeValues' => [
                    'type' => Type::listOf(new AttributeValueInputType())
                ],
            ],
        ]);
    }
}