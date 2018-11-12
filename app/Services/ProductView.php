<?php

namespace App\Services;

use App\Product;

class ProductView
{
    static function all()
    {
        return Product::where('isPublish', '1')
                        ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
                        ->orderBy('schedulePost', 'desc')->paginate(12);
    }

    public static function getPopularProducts()
    {
        return Product::where('isPublish', '1')
                        ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
                        ->inRandomOrder()->take(4)->get();
    }
    
    public static function getPopularProductsByCount($int)
    {
        return Product::where('isPublish', '1')
                        ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
                        ->orderBy('schedulePost', 'desc')->inRandomOrder()->take($int)->get();
    }

    public static function getByCategory($category)
    {
        return Product::where('isPublish', '1')
                        ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
                        ->orderBy('schedulePost', 'desc')->where('productCategory', $category)->paginate(12);
    }

    public static function takeByCategory($category)
    {
        return Product::where('isPublish', '1')
                        ->where('quantity', '>', 0)
                        ->where(function ($query) {
                            $query->where('schedulePost', '>', time())
                                ->orwhere('schedulePost','=',null);
                        })
                        ->where(function ($query) {
                            $query->where('scheduleDelete','<',time())
                                ->orwhere('scheduleDelete','=',null);
                        })
                        ->orderBy('schedulePost', 'desc')->where('productCategory', $category)->take(10)->get();
    }
}
