<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $table = 'package';
    protected $fillable = ['type','to_place','from','default_price','price','highlight','hotel_type','vehicle','food','total_days','total_nights','day','includes','map_html','image1','image2','image3','image4','image5','popularity','status'];
}
