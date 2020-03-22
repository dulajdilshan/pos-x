<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
//    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'code',
        'name',
        'email',
        'address',
        'phone',
        'bank_name',
        'bank_branch',
        'bank_acc_no',
        'created_at',
        'updated_at',
    ];
    //
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
