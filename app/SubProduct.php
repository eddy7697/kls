<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubProduct extends Model
{
    protected $table = 'sub_products';

    protected $fillable = [
        'productParent',
        'subSerialNumber',
        'subProductGuid',
        'subFeatureImage',
        'subTitle',
        'subQuantity',
        'subPrice',
        'subDiscountPrice',
        'subDescription',
        'cf_1',
        'cf_2',
        'cf_3',
        'cf_4',
        'cf_5',
    ];
}
