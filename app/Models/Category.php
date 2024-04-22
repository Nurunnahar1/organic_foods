<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes ;
    protected $fillable = ['id','category_image','title','slug','updated_at'];

       public function products()
       {
       return $this->hasMany(Product::class);
       }
}
