<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use Log;

class FavoriteController extends Controller
{
    /**
     * Add fav
     */
    public function addFavorite($guid)
    {
        if (Session::has('favorite'))  {
            $favorite = Session::get('favorite');

            if (!in_array($guid, $favorite)) {
                array_push($favorite, $guid);
                Session::put('favorite', $favorite);
            }
        } else {
            Session::put('favorite', array($guid));
        }

        return Session::all();
    }

    /**
     * Get fav list
     */
    public function getFavorite()
    {
        if (Session::has('favorite'))  {
            $favorite = Session::get('favorite');
            $productList = array();

            foreach ($favorite as $key => $value) {
                $product = Product::where('productGuid', $value)->first();

                array_push($productList, [
                    'productGuid' => $product->productGuid,
                    'productTitle' => $product->productTitle,
                    'featureImage' => $product->featureImage,
                    'price' => number_format($product->price)
                ]);
            }

            return $productList;
        } else {
            Session::put('favorite', array());

            return Session::get('favorite');
        }
    }

    /**
     * deleteFavorite
     */
    public function deleteFavorite($guid)
    {
        if (Session::has('favorite'))  {
            $favorite = Session::get('favorite');

            if (in_array($guid, $favorite)) {
                unset($favorite[array_search($guid, $favorite)]);
                Session::put('favorite', $favorite);
            }
        } else {
            return Session::get('favorite');
        }

        return Session::get('favorite');
    }
}
