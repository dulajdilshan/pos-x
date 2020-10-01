<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'item_code',
        'name',
        'quantity',
        'unit_price',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_product');
    }

    public function supplier()
    {
        return $this->belongsToMany(Supplier::class, 'product_supplier');
    }
}
