<?php

namespace App\Services;


class ProductList {

    public function getApiData()
    {
        $ch = curl_init();
        $url = 'https://npci-qa-api.open.money/api/consumer/get-catalogues-for-category';
        curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch,CURLOPT_POSTFIELDS,'');
        
        $resp = curl_exec($ch);
        
        if($e = curl_error($ch)){
            echo $e;
        }
        else{
            $decoded = json_decode($resp, true);
            return $decoded;
        }        
    }
}
?>