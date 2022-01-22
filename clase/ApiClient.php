<?php

class ApiClient {
    private $response;
    private $error;
    
    public function getResponse() {
        return $this->response;
    }

    public function getError() {
        return $this->error;
    }
    
    public function get($endpointUrl, $queryData = [])
    {
        $this->makeRequest('GET', $endpointUrl . '?' . http_build_query($queryData));
    }
    
    public function post($endpointUrl, $postData = [], $headers = [], $isJson = false)
    {
        $this->makeRequest('POST', $endpointUrl, $postData, $headers, $isJson);
    }
    
    private function makeRequest($method, $endpointUrl, $body = null, $headers = [], $isJson = false)
    {
        $curl = curl_init();
        $curlData = array(
            CURLOPT_URL => $endpointUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method
        );
        if (is_array($body)) {
           if ($isJson) {
               $body = json_encode($body);
           } else {
               $body = http_build_query($body);
           }
           
           if (empty($headers)) {
               $headers = ['Content-Type: application/x-www-form-urlencoded'];
           }
           
           $curlData = array(
               CURLOPT_URL => $endpointUrl,
               CURLOPT_RETURNTRANSFER => TRUE,
               CURLOPT_CUSTOMREQUEST => $method,
               CURLOPT_POSTFIELDS => $body,
               CURLOPT_HTTPHEADER => $headers
           );
        }
        
        curl_setopt_array($curl, $curlData);
        try {
            $this->response = curl_exec($curl);
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();

        }
    }
    

            
}
