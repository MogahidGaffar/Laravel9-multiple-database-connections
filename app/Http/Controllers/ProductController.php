<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getRecordfromDb1()
    {
        $product = new Product;
        $product->setConnection('laravel9_multi_db1');
        $something = $product->find(1);
        return $something;
    }

    public function getRecordfromDb2()
    {
        $product = new Product;
        $product->setConnection('laravel9_multi_db2');
        $something = $product->find(1);
        return $something;
    }
}
