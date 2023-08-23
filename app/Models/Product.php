<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $connection = 'laravel9_multi_db1';
  
    protected $fillable = [
        'name', 'detail'
    ];
}
