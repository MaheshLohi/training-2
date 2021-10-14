<?php


namespace App\services;





class Details {

    public function getDetails($uuid)

    {
        $ch = curl_init();
        $url = "https://npci-qa-api.open.money/api/consumer/get-catalogue-details?catalogue_id={$uuid}";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        if($er = curl_error($ch)){
            echo $er;
        }
        else{
            $decoded = json_decode($result, true);
            return $decoded;
        }        
    }
}
?>







?>