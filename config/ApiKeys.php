<?php

namespace config;

class ApiKeys {

    private  $apiKey = 'insert your api key here';
    private  $secret = 'insert your secret key here';

    /**
     * @return string
     */
    public static function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public static function getSecret()
    {
        return $this->secret;
    }


} 