<?php

namespace App\model;

use App\Database\Database;
echo "( category model class file )";
class Category extends Database
{
    protected static string $table = 'categories';

}