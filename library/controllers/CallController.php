<?php

namespace library\controllers;

class CallController
{
	public function __construct(){}

	public static function fetch($url, $type = 'GET', $fields = array())
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url
		));	

		$result = curl_exec($curl);
		$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		return array('code' => $http_status, 'result' => $result);
	}
}