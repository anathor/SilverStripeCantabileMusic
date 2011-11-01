<?php
if(isset($_GET['tx']))
{
	$tx = $_GET['tx'];
	print $tx.'<br>';
	// Init cURL
	$request = curl_init();

	// Set request options
	curl_setopt_array($request, array
	(
	  CURLOPT_URL => 'https://www.paypal.com/cgi-bin/webscr',
	  CURLOPT_POST => TRUE,
	  CURLOPT_POSTFIELDS => http_build_query(array
	    (
	      'cmd' => '_notify-synch',
	      'tx' => $tx,
	      'at' => '8p_kpbKXvlLjHf-kzzelaQh8MFALG4YMA-v-6Gxbtq3w2896oSXnINkEyHm',
	    )),
	  CURLOPT_RETURNTRANSFER => TRUE
	));

	// Execute request and get response and status code
	$response = curl_exec($request);
	$status   = curl_getinfo($request, CURLINFO_HTTP_CODE);

	// Close connection
	curl_close($request);

	$lines = explode("\n", $response);
	$keyarray = array();
	for ($i=1; $i<count($lines);$i++)
	{
		list($key,$val) = explode("=", $lines[$i]);
		$keyarray[urldecode($key)] = urldecode($val);
		$valName = urldecode($key);
		$valVal = urldecode($val);
	}
	
	$cart_items = $keyarray['num_cart_items'];
	for ($j=1; $j <= $cart_items; $j++)
	{
		print $keyarray['item_name'.$j].'<br>';
		print $keyarray['quantity'.$j].'<br>';
	}
}

?> 