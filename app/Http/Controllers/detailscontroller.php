<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailscontroller extends Controller
{
    public $detailsObj;
    public function __construct( Details $detailsClass)
    {
        $this->detailsObj = $detailsClass;
    }
    public function Details()
    {
        $detailsData=$this->detailObj ->Details();
        // return view("welcome",["detailsObj"=>$detailsData['data']]);
    }                     
    

}
