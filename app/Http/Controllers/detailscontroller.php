<?php

namespace App\Http\Controllers;
use App\services\details;
use Illuminate\Http\Request;

class detailscontroller extends Controller
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
        if($detailsData['data']){
        return view("details",["detailsObj"=>$detailsData['data'][0]]);
    }  
    return view ('details',['message'=>"No data found"]);                  
}

}
