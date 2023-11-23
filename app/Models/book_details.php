<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_details extends Model
{
    protected $table = "book_details";
    protected $fillable = ['user_id','package_id','checkin','no_of_people','from_price','status'];
}
