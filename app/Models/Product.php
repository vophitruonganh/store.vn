<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 */
class Product extends Model
{
    protected $table = 'products';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'url',
        'price',
        'count',
        'sale',
        'status',
        'active',
        'trademark_id'
    ];

    protected $guarded = [];

    protected function trademark(){
        $trademark = $this->belongsToMany(app('trademark'),'product_trademark');

        return $trademark;
    }

    protected function category(){
        return $this->belongsToMany(app('category'),'product_category');
    }

    protected function attachment(){
        return $this->belongsToMany(app('attachment'),'product_attachment');
    }

    protected function description(){
        return $this->hasOne(app('description'),'product_id');
    }

    protected function discount(){
        return $this->belongsToMany(app('discount'),'product_discount');
    }
}