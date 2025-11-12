<?php

namespace App\GraphQL;

use App\Resolvers\OrdersResolver;
use App\types\OrderInputType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class Mutation
{
    public static function defineMutations(): ObjectType
    {
        return new ObjectType([
            'name' => 'Mutation',
            'fields' => [
                'placeOrder' => [
                    'type' => Type::string(),
                    'args' => [
                        'OrderInput' => Type::nonNull(new OrderInputType()),
                    ],
                    'resolve' => static fn($rootValue, array $args) => OrdersResolver::store($args['OrderInput']),
                ],
            ],
        ]);
    }
}