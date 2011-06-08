<?php

/* Michigan Media Server Manager client class */
/* Catch MMMClientException in every call you perform */


class MMMClientException extends Exception {};

class MMMClient
{
	private $server, $port, $password;

	function __construct($server, $port, $password)
	{
		$this->server = $server;
		$this->port = $port;
		$this->password = $password;
	}

	private function PostRequest($req)
	{
		$hdr[] = 'Host: ' . $this->server;
		$hdr[] = 'Content-type: text/xml';
		$hdr[] = 'Content-length: ' . strlen($req) . "\r\n";
		$hdr[] = $req;

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, 'http://' . $this->server . ':' . $this->port . '/'); # URL to post to
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 ); # return into a variable
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $hdr ); # custom headers, see above
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' ); # This POST is special, and uses its specified Content-type
		$result = curl_exec( $ch ); # run!
		if($result === false)
		{
			throw new MMMClientException(curl_error($ch));
		}
		curl_close($ch); 

		$response = xmlrpc_decode($result);

		if (xmlrpc_is_fault($response)) 
		{
			throw new MMMClientException("xmlrpc: $response[faultString] ($response[faultCode])");
		} 
		else 
		{
			return($response);
		}
	}

	/* Restarts lighttpd on this server */
	function RestartLighttpd()
	{
		$req = xmlrpc_encode_request('RestartLighttpd', array($this->password,
					));
		return $this->PostRequest($req);
	}

	function AddUser($userName, $domain, $uid, $gid, $pass)
	{
		$req = xmlrpc_encode_request('RestartLighttpd', array($this->password,
					$userName,
					$domain,
					$uid,
					$gid,
					$pass,
					));
		return $this->PostRequest($req);
	}
}
