<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person_detail extends Model
{
    protected $table = 'person_detail';
    protected $fillable = ['book_id','user_id','package_id','name','email','mobile','age','status'];
}
