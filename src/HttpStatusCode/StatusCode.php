<?php
namespace PhpHelper\HtmlStatusCode;
/**
 *
 */
return [
    100	=>	array('code'=>'100','constant'=>'http.StatusContinue','text'=>'Continue','description'=>''),
  		101	=>	array('code'=>'101','constant'=>'http.StatusSwitchingProtocols','text'=>'Switching Protocols','description'=>''),

  		200	=>	array('code'=>'200','constant'=>'http.StatusOK','text'=>'OK','description'=>'No error, operation successful.'),
  		201	=>	array('code'=>'201','constant'=>'http.StatusCreated','text'=>'Created','description'=>'Successful creation of a resource.'),
  		202	=>	array('code'=>'202','constant'=>'http.StatusAccepted','text'=>'Accepted','description'=>'The request was received.'),
  		203	=>	array('code'=>'203','constant'=>'http.StatusNonAuthoritativeInfo','text'=>'Non-Authoritative Information','description'=>''),
  		204	=>	array('code'=>'204','constant'=>'http.StatusNoContent','text'=>'No Content','description'=>'The request was processed successfully, but no response body is needed.'),
  		205	=>	array('code'=>'205','constant'=>'http.StatusResetContent','text'=>'Reset Content','description'=>''),
  		206	=>	array('code'=>'206','constant'=>'http.StatusPartialContent','text'=>'Partial Content','description'=>''),

  		300	=>	array('code'=>'300','constant'=>'http.StatusMultipleChoices','text'=>'Multiple Choices','description'=>''),
  		301	=>	array('code'=>'301','constant'=>'http.StatusMovedPermanently','text'=>'Moved Permanently','description'=>'Resource has moved.'),
  		302	=>	array('code'=>'302','constant'=>'http.StatusFound','text'=>'Found','description'=>''),
  		303	=>	array('code'=>'303','constant'=>'http.StatusSeeOther','text'=>'See Other','description'=>''),
  		304	=>	array('code'=>'304','constant'=>'http.StatusNotModified','text'=>'Not Modified','description'=>'Resource has not been modified.'),
  		305	=>	array('code'=>'305','constant'=>'http.StatusUseProxy','text'=>'Use Proxy','description'=>''),
  		307	=>	array('code'=>'307','constant'=>'http.StatusTemporaryRedirect','text'=>'Temporary Redirect','description'=>''),

  		400	=>	array('code'=>'400','constant'=>'http.StatusBadRequest','text'=>'Bad Request','description'=>'Malformed syntax or a bad query.'),
  		401	=>	array('code'=>'401','constant'=>'http.StatusUnauthorized','text'=>'Unauthorized','description'=>'Action requires user authentication.'),
  		402	=>	array('code'=>'402','constant'=>'http.StatusPaymentRequired','text'=>'Payment Required','description'=>'This code is reserved for future use.'),
  		403	=>	array('code'=>'403','constant'=>'http.StatusForbidden','text'=>'Forbidden','description'=>'Authentication failure or invalid Application ID.'),
  		404	=>	array('code'=>'404','constant'=>'http.StatusNotFound','text'=>'Not Found','description'=>'Resource not found.'),
  		405	=>	array('code'=>'405','constant'=>'http.StatusMethodNotAllowed','text'=>'Method Not Allowed','description'=>'Method not allowed on resource.'),
  		406	=>	array('code'=>'406','constant'=>'http.StatusNotAcceptable','text'=>'Not Acceptable','description'=>'Requested representation not available for the resource.'),
  		407	=>	array('code'=>'407','constant'=>'http.StatusProxyAuthRequired','text'=>'Proxy Authentication Required','description'=>''),
  		408	=>	array('code'=>'408','constant'=>'http.StatusRequestTimeout','text'=>'Request Timeout','description'=>'Request has timed out.'),
  		409	=>	array('code'=>'409','constant'=>'http.StatusConflict','text'=>'Conflict','description'=>'State of the resource doesn\'t permit request.'),
  		410	=>	array('code'=>'410','constant'=>'http.StatusGone','text'=>'Gone','description'=>'The URI used to refer to a resource.'),
  		411	=>	array('code'=>'411','constant'=>'http.StatusLengthRequired','text'=>'Length Required','description'=>'The server needs to know the size of the entity body and it should be specified in the Content Length header.'),
  		412	=>	array('code'=>'412','constant'=>'http.StatusPreconditionFailed','text'=>'Precondition Failed','description'=>'Operation not completed because preconditions were not met.'),
  		413	=>	array('code'=>'413','constant'=>'http.StatusRequestEntityTooLarge','text'=>'Request Entity Too Large','description'=>'The representation was too large for the server to handle.'),
  		414	=>	array('code'=>'414','constant'=>'http.StatusRequestURITooLong','text'=>'Request-URI Too Long','description'=>'The URI has more than 2k characters.'),
  		415	=>	array('code'=>'415','constant'=>'http.StatusUnsupportedMediaType','text'=>'Unsupported Media Type','description'=>'Representation not supported for the resource.'),
  		416	=>	array('code'=>'416','constant'=>'http.StatusRequestedRangeNotSatisfiable','text'=>'Requested Range Not Satisfiable','description'=>'Requested range not satisfiable.'),
  		417	=>	array('code'=>'417','constant'=>'http.StatusExpectationFailed','text'=>'Expectation Failed','description'=>''),

  		500	=>	array('code'=>'500','constant'=>'http.StatusInternalServerError','text'=>'Internal Server Error','description'=>'Internal server error.'),
  		501	=>	array('code'=>'501','constant'=>'http.StatusNotImplemented','text'=>'Not Implemented','description'=>'Requested HTTP operation not supported.'),
  		502	=>	array('code'=>'502','constant'=>'http.StatusBadGateway','text'=>'Bad Gateway','description'=>'Backend service failure (data store failure).'),
  		503	=>	array('code'=>'502','constant'=>'http.StatusServiceUnavailable','text'=>'Service Unavailable','description'=>''),
  		504	=>	array('code'=>'504','constant'=>'http.StatusGatewayTimeout','text'=>'Gateway Timeout','description'=>''),
  		505	=>	array('code'=>'505','constant'=>'http.StatusHTTPVersionNotSupported','text'=>'HTTP Version Not Supported','description'=>'HTTP version not supported.'),
  	];
?>
