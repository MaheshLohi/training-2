<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\listproducts;

class apicontroller extends Controller
{
    
        public $ApiModel;
        public function __construct(listproducts $ApiModel)
        {
            $this->ApiModel = $ApiModel;
        }
        
            
        
        public function listApiData()
         {
            $apiData = $this->apiModel->getApiData();
            // $this->obj ->ApiModel->view($decoded);
            return view('welcome', ['listproducts' => $apiData['data']]);
        }
    }



  
    
