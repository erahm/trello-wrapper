<?php

namespace config;

class ApiKeys {

    private  $apiKey = 'ad0d52d91479ad00cc66d4103d63a53f';
    private  $secret = '43997ac3f6373cd44ea0952181d8587931f289fbac5940bf2b9cfcb8ec8b8064';

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }


} 