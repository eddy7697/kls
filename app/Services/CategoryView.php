<?php

namespace App\Services;

use App\Category;

class CategoryView
{
    public static function product()
    {
        return Category::where('type', 'product')->get();
    }

    public static function productRoot()
    {
        return Category::whereNull('parentId')->get();
    }

    public static function getProductByParent($category)
    {
        return Category::where('parentId', $category)->get();
    }

    public static function post()
    {
        return Category::where('type', 'post')->get();
    }
}
