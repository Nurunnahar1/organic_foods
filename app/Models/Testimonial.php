<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes ;
    protected $fillable = ['client_name', 'client_name_slug', 'client_designation', 'client_message', 'client_image'];
}
