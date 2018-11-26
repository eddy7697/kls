<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'productGuid',
        'productTitle',
        'serialNumber',
        'quantity',
        'author',
        'authorName',
        'productCategory',
        'featureImage',
        'album',
        'Temperature',
        'customPath',
        'productStatus',
        'rule',
        'rate',
        'command',
        'productType',
        'reserveStatus',
        'isPublish',
        'price',
        'discountedPrice',
        'productDescription',
        'shortDescription',
        'productInformation',
        'socialImage',
        'tags',
        'seoTitle',
        'seoKeyword',
        'seoDescription',
        'schedulePost',
        'sortKey',
        'scheduleDelete'
    ];

    /**
     * get index
     */
    public function searchableAs()
    {
        return 'products_index';
    }
}
