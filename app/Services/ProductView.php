<?php

namespace App\Services;

use App\Product;

class ProductView
{
    static function all()
    {
        return Product::where('isPublish', '1')
                        // ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
<<<<<<< HEAD
                        ->leftJoin('categories', 'products.productCategory', '=', 'categories.categoryGuid')
                        ->select('products.*', 'categories.categoryTitle')
=======
>>>>>>> e77f566b13c4bc72020d9639993656ccc135d958
                        ->orderBy('schedulePost', 'desc')->paginate(12);
    }

    public static function getPopularProducts()
    {
        return Product::where('isPublish', '1')
                        // ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
                        ->leftJoin('categories', 'products.productCategory', '=', 'categories.categoryGuid')
                        ->select('products.*', 'categories.categoryTitle')
                        ->inRandomOrder()->take(4)->get();
    }
    
    public static function getPopularProductsByCount($int)
    {
        return Product::where('isPublish', '1')
                        // ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
<<<<<<< HEAD
                        ->leftJoin('categories', 'products.productCategory', '=', 'categories.categoryGuid')
                        ->select('products.*', 'categories.categoryTitle')
=======
>>>>>>> e77f566b13c4bc72020d9639993656ccc135d958
                        ->orderBy('schedulePost', 'desc')->inRandomOrder()->take($int)->get();
    }

    public static function getByCategory($category)
    {
        return Product::where('isPublish', '1')
                        // ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
<<<<<<< HEAD
                        })                        
                        ->where('productCategory', $category)
                        ->leftJoin('categories', 'products.productCategory', '=', 'categories.categoryGuid')
                        ->select('products.*', 'categories.categoryTitle')
                        ->orderBy('schedulePost', 'desc')->paginate(12);
=======
                        })
                        ->orderBy('schedulePost', 'desc')->where('productCategory', $category)->paginate(12);
>>>>>>> e77f566b13c4bc72020d9639993656ccc135d958
    }

    public static function takeByCategory($category)
    {
        return Product::where('isPublish', '1')
                        // ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
<<<<<<< HEAD
                        ->where('productCategory', $category)
                        ->leftJoin('categories', 'products.productCategory', '=', 'categories.categoryGuid')
                        ->select('products.*', 'categories.categoryTitle')
                        ->orderBy('schedulePost', 'desc')->take(10)->get();
=======
                        ->orderBy('schedulePost', 'desc')->where('productCategory', $category)->take(10)->get();
>>>>>>> e77f566b13c4bc72020d9639993656ccc135d958
    }
}
