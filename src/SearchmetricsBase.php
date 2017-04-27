<?php

/**
 * Core methods for the Searchmetrics API SDK
 *
 * @author s.schmidt
 * @author Martin Rothenberger <m.rothenberger@searchmetrics.com>
 * @author Juan Girini <juangirini@gmail.com>
 * @copyright Searchmetrics 2012
 * @version v2 2012-03-06
 */

namespace SearchmetricsPHP;
use ZendOAuth\OAuth as Zend_Oauth;
use ZendOAuth\Token\Access as Zend_Oauth_Token_Access;
class SearchmetricsBase
{
	/**
	 * @var Zend_Http_Client
	 */
	protected $http_client;

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
		$this->initHttpClient();
	}

	/**
	 * Init the OAuth Client
	 */
	private function initHttpClient()
	{
		$oauthOptions = array(
			'requestScheme' => Zend_Oauth::REQUEST_SCHEME_HEADER,
			'version' => '1.0',
			'signatureMethod' => "HMAC-SHA1",
			'consumerKey' => $this->api_key,
			'consumerSecret' => $this->api_secret
		);
		$token = new Zend_Oauth_Token_Access();

		$this->http_client = $token->getHttpClient($oauthOptions, null, array('timeout' => $this->timeout));
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
		$service_url .= $service_name.'.json';

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
		// set the HTTP method
		$this->http_client->setMethod($method);

		$service_url = $this->buildServiceUrl($service_name);
		$this->http_client->setUri($service_url);

		if ($method == 'GET') {
			$this->http_client->setParameterGet($arr_parameter);
		} else {
			$this->http_client->setParameterPost($arr_parameter);
		}

		// execute the request
		$response = $this->http_client->send();

		$api_result = $response->getContent();

		$content = (preg_split("/\n/",$api_result));

		$this->http_status = $response->getStatusCode();

		// response handling
		if ($this->http_status != 200 || ! array_key_exists(1,$content))
		{
			return false;
		}

		return json_decode($content[1], true);
	}

	/**
	 * Send request to the Searchmetrics API
	 *
	 * @param string $url
	 *
	 * @return string $url
	 */
	private function request($url)
	{
		$this->http_client->setUri($url);
		$response = $this->http_client->getRequest();

		return $response;
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
