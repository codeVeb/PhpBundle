<?php

class yahooWeather{
	
	private $yql_base = 'http://query.yahooapis.com/v1/public/yql?q=';
	private $woeid = 0;
	private $returnFormat = 'array';
	
	function __construct( $woeid=0 ){
		if( $woeid == 0 ){
			exit( $this->error['NO_WOEID'] );
		}else{
			$this->woeid = $woeid;
		}
	}
	
	public function setFormat( $format = 'json' ){
		
		if( $format == 'json' || $format == 'xml' ) return $this->returnFormat = $format;
		
		exit( $this->error['UNDEFINED_FORMAT'] );
	}
	
	public function getWeather(){
		
		$yql_param ="select * from weather.forecast where woeid=".$this->woeid;
		
		return $this->curlHandler( $this->yql_base . urlencode($yql_param) . '&format=' . $this->returnFormat );
		
	}
	
	public function curlHandler( $url, $param = array() ){
		
		$ch = curl_init();
		$option = array(
						CURLOPT_URL=>$url,
						CURLOPT_USERAGENT=>'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)',
						CURLOPT_RETURNTRANSFER=>true,
						// CURLOPT_CONNECTTIMEOUT=>5,
						// CURLOPT_TIMEOUT=>5
						);
		
		curl_setopt_array( $ch, $option );
		$weather_data = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		if($httpcode=200){
			return $this->export( $weather_data );
		}
		else return $this->error['CURL_FETCH_ERROR'];
	}
	
	private function export( $data ){
		
		if( $this->returnFormat == 'json' ){
			// return json_decode($data,true);
			return $data;
		}else if( $this->returnFormat == 'xml' ){
			
		}else{
			echo 'error';
		}
	}
	
	private $error = array(
	'NO_WOEID'=>"Please enter WOEID for your region..",
	'UNDEFINED_FORMAT'=>"Undefined return format. Use 'json' either 'xml'",
	'CURL_FETCH_ERROR'=>'error while fetching data from server.',
	'CURL_FETCH_ERROR'=>'',
	''=>'');
}
?>