<?php
class LocByIP{
	
	public $IP = '';
	
	public function __construct( $ip = NULL ){
		
		if($ip === NULL){
			$this->IP = $this->getIP();
		}else{
			if (!filter_var($ip, FILTER_VALIDATE_IP) === false)	$this->IP = $ip;
			else exit("$ip is not a valid IP address");
		}
	}
	
	/*
	* CURL Handler
	* used to send request across api.
	*/
	public function get(){
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://ipinfo.io/$this->IP/json");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result= curl_exec($ch);
		curl_close ($ch);
		
		return $this->objectToArray(json_decode($result));
	}
	
	/*
	* Convert Object To Array
	* converts Objects to array
	*/
	private function objectToArray($data){
		
		if (is_array($data) || is_object($data))
		{
			$result = array();
			foreach ($data as $key => $value)
			{
				$result[$key] = $this->objectToArray($value);
			}
			return $result;
		}
		return $data;
	}
	
	private function getIP(){

		//Just get the headers if we can or else use the SERVER global
		if ( function_exists( 'apache_request_headers' ) ) {
			$headers = apache_request_headers();
		} else {
			$headers = $_SERVER;
		}
		
		//Get the forwarded IP if it exists
		if( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ){
			$the_ip = $headers['X-Forwarded-For'];
		}elseif( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )){
			$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
		}else{
			$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
		}
		return $the_ip;
	}
}

// $ip = new LocByIP('8.8.8.8');
// $aa = $ip->get();
// print_r($aa);
// echo $aa['city'];
?>