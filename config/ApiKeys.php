<?php

namespace config;

class ApiKeys {

    const  API_KEY = 'insert your api key here';
    const SECRET = 'insert your secret key here';

    /**
     * @return string
     */
    public static function getApiKey() {
        return self::API_KEY;
    }

    /**
     * @return string
     */
    public static function getSecret() {
        return self::SECRET;
    }
} 