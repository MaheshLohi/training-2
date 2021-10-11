<?php



function getApiData()
    {
        $ch = curl_init();
        $url = 'https://npci-qa-api.open.money/api/consumer/get-catalogues-for-category';
        
        $data_array=array(
            'name'=>'Robin Babu',
            'job'=>'Jr Software Engineer'
        );

        $data=http_build_query($data_array);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,'');

        $resp = curl_exec($ch);

        if($e = curl_error($ch)){
            echo $e;
        }
        else{
            $decoded = json_decode($resp, true);
            foreach($decoded as $key => $val) {
                echo $key.':'.$val.'<br>';
        }
        curl_close($decoded);
        
    }
?>