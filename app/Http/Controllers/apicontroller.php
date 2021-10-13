<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductList;

class apicontroller extends Controller
{

    
    public $productObj;
    public function __construct( ProductList $productClass)
    {
        $this->productObj = $productClass;
    }



    public function ProductList() 
    {
        $productData=$this->productObj ->getApiData();
        return view("welcome",["dataObj"=>$productData['data']]);
    }
}
