<?php

namespace App\Http\Controllers;
use App\services\details;
use Illuminate\Http\Request;

class detailscontroller extends Controller
{
    public $detailsObj;
    public function __construct( details $detailsClass)
    {
        $this->detailsObj = $detailsClass;
    }
    public function Details()
    {
        $detailsData=$this->detailObj ->details();
        return view("/details",["detailsObj"=>$detailsData['data']]);
    }                     
    

}
