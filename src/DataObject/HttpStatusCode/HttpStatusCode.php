<?php
namespace PhpHelper\DataObject\HttpStatusCode;
/**
 * Status Code Definitions
 * Each Status-Code is described below, including a description of which method(s) it can follow and any metainformation required in the response.
 * Informational	1xx
 * Successful		2xx
 * Redirection		3xx
 * Client Error	4xx
 * Server Error	5xx
 **/

class HttpStatusCode{

	public $status_code;

	public function __construct(){
		$this->status_code = require_once( __DIR__ .'/StatusCode.php');
		// print_r($this->status_code);
	}

	public function getHttpStatusCode($code){

		if(array_key_exists($code,$this->status_code)){
			$http['status_code'] = $this->status_code[$code];
			$http['status_message'] = $this->status_code[$code]['text'];
			return $http;
			// print_r($http);
		}
		return false;
	}
}
?>
