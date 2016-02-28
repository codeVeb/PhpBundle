<?php
class google_currency{
	private $url;
	private $request;
	private $response;
	private $param;
	private $from;
	private $to;
	private $amt;
	private $result;
	
	function __construct($from, $to, $amt = 1) {
		
		$this->from		=	$from;
		$this->to		=	$to;
		$this->amt		=	$amt;
		$this->url		=	"http://www.google.com/finance/converter?a=$amt&from=$from&to=$to"; 
		$this->param	=	Array( CURLOPT_URL => $this->url,
							CURLOPT_RETURNTRANSFER => 1,
							CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1",
							CURLOPT_CONNECTTIMEOUT => 0 );

		$this->request	=	curl_init();
		curl_setopt_array($this->request, $this->param);
		$this->response = curl_exec($this->request);
		curl_close($this->request);
	}
	
	function getit(){
		$regx= '#\<span class=bld\>(.+?)\<\/span\>#s';
		preg_match($regx, $this->response, $result);
		$this->result = filter_var($result[0], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		return $this->result;
	}
	
	function getjson(){
		$this->getit();
		$_json = array('convert_from'=>$this->from, 'convert_to'=>$this->to, 'convert_amount'=>$this->amt, 'convert_result'=>$this->result);
		return json_encode($_json);
	}
}
?>