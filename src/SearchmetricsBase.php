<?php

/**
 * Core methods for the Searchmetrics API SDK
 *
 * @author s.schmidt
 * @author Martin Rothenberger <m.rothenberger@searchmetrics.com>
 * @author Juan Girini <juangirini@gmail.com>
 * @author Yohann NIzon <ynizon@gmail.com>
 * @copyright Searchmetrics 2017
 * @version v3 2017-12-06
 */

namespace SearchmetricsPHP;

class SearchmetricsBase
{
	/**
	 * Token
	 */
	protected $access_token;
	
	/**
	 * Public API Key for oAuth
	 * @var string
	 */
	protected $api_key;

	/**
	 * API secret for oAuth
	 * @var string
	 */
	protected $api_secret;

	/**
	 * Zend Timeout
	 * @var int
	 */
	protected $timeout;

	/**
	 * Http status
	 * @var int
	 */
	protected $http_status;

	/**
	 * API Version
	 * @var string
	 */
	protected $api_version = '';

	/**
	 * Url to Searchmetrics API
	 * @var string
	 */
	const SEARCHMETRICS_URL = 'api.searchmetrics.com/';

	/**
	 * @param string $api_key The API key
	 * @param string $api_secret The API secret
	 * @param int $timeout
	 */
	public function __construct($api_key, $api_secret, $timeout = 30)
	{
		$this->api_key = $api_key;
		$this->api_secret = $api_secret;
		$this->timeout = $timeout;
		$this->initToken();
	}

	/**
	 * Init the Token
	 */
	private function initToken()
	{		
		$url =  'http://'.self::SEARCHMETRICS_URL;
		$url .= $this->getApiVersion();
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,               $url . '/token');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,    true);
		curl_setopt($ch, CURLOPT_HEADER,            false);
		curl_setopt($ch, CURLOPT_POST,              true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,        'grant_type=client_credentials');
		curl_setopt($ch, CURLOPT_USERPWD,           $this->api_key.':'.$this->api_secret);
		$result = curl_exec($ch);
		curl_close($ch);
		 
		$result = json_decode($result, true);
		$this->access_token = $result['access_token'];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,               $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,    true);
		curl_setopt($ch, CURLOPT_HEADER,            false);
		$result = curl_exec($ch);
		curl_close($ch);
	}

	/**
	 * Generate the url to request the searchmetrics api
	 *
	 * @param string $service_name
	 *
	 * @return string $service_url
	 */
	protected function buildServiceUrl($service_name)
	{
		$service_url =  'http://'.self::SEARCHMETRICS_URL;
		$service_url .= $this->getApiVersion().'/';
		$service_url .= $service_name.'.json?';
		$service_url .= "access_token=".$this->access_token;
		
		return $service_url;
	}

	/**
	 * Executes the API request
	 *
	 * @param $service_name
	 * @param $arr_parameter
	 * @param $method
	 * @return result of the api request
	 * @throws SDKException
	 */
	protected function run($service_name, $arr_parameter, $method)
	{
		$ch = curl_init();

		$service_url = $this->buildServiceUrl($service_name);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,    true);
		curl_setopt($ch, CURLOPT_HEADER,            false);

		$fields_string = "";
		foreach($arr_parameter as $key=>$value) { 
			$fields_string .= $key.'='.$value.'&'; 
		}
		rtrim($fields_string, '&');
		
		if ($method == 'GET') {
			$service_url .= "&".$fields_string;
		} else {			
			curl_setopt($ch,CURLOPT_POST, count($arr_parameter));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $arr_parameter);
		}

		curl_setopt($ch, CURLOPT_URL, $service_url);		
		$result = curl_exec($ch);
		$this->http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		// response handling
		if ($this->http_status != 200)
		{
			return false;
		}

		$r = json_decode($result, true);
		return $r["response"];
	}


	/**
	 * Getter API Version
	 *
	 * @return string $this->api_version
	 */
	public function getApiVersion()
	{
		return $this->api_version;
	}

	/**
	 * Setter API Version
	 *
	 * @param string $api_version
	 */
	public function setApiVersion($api_version)
	{
		$this->api_version = $api_version;
	}

	/**
	 * @return int
	 */
	public function getHttpStatus()
	{
		return $this->http_status;
	}
}

?>
