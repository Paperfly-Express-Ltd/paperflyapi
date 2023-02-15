<?php

namespace Paperfly\PaperflyApi;

class PaperflyApi
{
    public $pfl_api_key;
    public $base_url;
    public $username;
    public $password;

    public function __construct()
    {
        //
    }

    public function setBaseUrl($base_url)
    {
        $this->base_url = $base_url;
        return $this;
    }

    public function setApiKey($pfl_api_key)
    {
        $this->pfl_api_key = $pfl_api_key;
        return $this;
    }
    public function setUserName($username)
    {
        $this->username = $username;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function placeOrder($data) {
        return $this->sentRequest("OrderPlacement",$data);
    }

    public function cancelOrder($data) {
        return $this->sentRequest("api/v1/cancel-order/",$data);
    }
    
    public function trackOrder($data) {
        return $this->sentRequest("API-Order-Tracking",$data);
    }

    public function sentRequest($resource_url, $data)
    {
        $r = [];
        $http_code = null;
        $curl = curl_init();

        $url = $this->base_url . $resource_url;
        $basic_auth = base64_encode($this->username.':'.$this->password);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic '.$basic_auth,
                'paperflykey: Paperfly_~La?Rj73FcLm',
                'Content-Type: application/json'
            ),
          ));

        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        return array(
            'status_code' => $http_code,
            'response' => json_decode($response, true)
        );
    }
}
    

