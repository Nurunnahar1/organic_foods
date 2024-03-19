<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =
    ['is_active','product_rating','product_image','additional_info','long_description','short_description','alert_quantity','product_stock','product_price','product_code','slug','name','category_id'];

     function category(){
     return $this->belongsTo(Category::class,'category_id', 'id');
     }

  
         function productImages(){
            return $this->hasMany(ProductImage::class);
         }
}
