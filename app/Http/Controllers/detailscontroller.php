<?php

namespace App\Http\Controllers;

use App\services\Details;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public $detailsObj;
    public function __construct( Details $detailsClass)
    {
        $this->detailsObj = $detailsClass;
    }
    public function Details($id)
    {
        $detailsData=$this->detailsObj->getDetails($id);
        // print_r($detailsData);
        return view("details",["detailsObj"=>$detailsData['data'][0]]);
    }                     
    

}
