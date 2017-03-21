<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 */
class Category extends Model
{
    protected $table = 'category';

    public $timestamps = true;

    protected $fillable = [
    	'id',
        'name',
        'url',
        'image',
        'active'
    ];

    protected $guarded = [];

    public function attachment(){
        return $this->belongsToMany(app('attachment'),'category_attachment');
    }

    public function product(){
        return $this->belongsToMany(app('product'),'product_category');
    }

    public function getProducts(){
        return $this->product()->paginate(4);
    }
}