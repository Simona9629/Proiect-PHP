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
    
    public function post($endpointUrl, $postData = [])
    {
        $this->makeRequest('POST', $endpointUrl, $postData);
    }
    
    private function makeRequest($method, $endpointUrl, $body = null)
    {
        $curl = curl_init();
        $curlData = array(
            CURLOPT_URL => $endpointUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method
        );
        if (is_array($body)) {
           $headers = 'Content-Type: application/x-www-form-urlencoded';
           $body = http_build_query($body);
           $curlData = array(
               CURLOPT_URL => $endpointUrl,
               CURLOPT_RETURNTRANSFER => TRUE,
               CURLOPT_CUSTOMREQUEST => $method,
               CURLOPT_POSTFIELDS => $body,
               CURLOPT_HTTPHEADER => array($headers)
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
