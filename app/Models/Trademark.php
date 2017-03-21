<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Trademark
 */
class Trademark extends Model
{
    protected $table = 'trademarks';
    public $timestamps = true;

    protected $fillable = [

        'name',
        'category_id',
        'url',
        'image',
        'active'
    ];

    protected $guarded = [];

    protected function category(){
        return $this->hasMany(app('category'),'id');
    }

    protected function attachment(){
        return $this->belongsToMany(app('attachment'),'trademark_attachment');
    }

    protected function product(){
        return $this->belongsToMany(app('product'),'product_trademark');
    }

    public function getProducts(){
        return $this->product()->paginate(4);
    }
}