<!DOCTYPE html>
<html lang="en-AU">
<head>
<!--[if lte IE 6]></base><![endif]-->
<title>Tickets &raquo; Cantabile Music</title>
<meta name="generator" content="SilverStripe - http://silverstripe.org" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/favicon.ico" />
<!--[if IE 6]>
           <style type="text/css">
            @import url(themes/blackcandy/css/ie6.css);
           </style>
        <![endif]-->
<link rel="stylesheet" type="text/css" href="/themes/blackcandy/css/layout.css?m=1320039647" />
<link rel="stylesheet" type="text/css" href="/themes/blackcandy/css/typography.css?m=1312938671" />
<link rel="stylesheet" type="text/css" href="/themes/blackcandy/css/form.css?m=1312938671" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
</head>
<body>
<script type="text/javascript" src="/module_minicart/thirdparty/minicart/minicart.js?m=1320065472"></script>
<script type="text/javascript">PAYPAL.apps.MiniCart.reset();</script>
<div id="BgContainer">
	<div id="Container">
		<div id="Header">
			<center><img src="/assets/Pictures/headersml.png" />
			<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.cantabilemusic.com.au" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px">
			</iframe>
			</center>
			<p>
			</p>
		</div>
		<div id="Navigation">
			<ul>
				<li><a href="/" title="Go to the page" class="link"><span>Home</span></a></li>
				<li><a href="/sutherland-shire-children-s-choir/" title="Go to the Sutherland Shire Children&#39;s Choir page" class="link"><span>Sutherland Shire Children&#39;s Choir</span></a></li>
				<li><a href="/private-music-tuition/" title="Go to the Private Music Tuition page" class="link"><span>Private Music Tuition</span></a></li>
				<li><a href="/sutherland-shire-early-childhood-music/" title="Go to the Sutherland Shire Early Childhood Music page" class="link"><span>Early Childhood</span></a></li>
				<li><a href="/contact-us/" title="Go to the Contact Us page" class="link"><span>Contact Us</span></a></li>
				<li><a href="/tickets/" title="Go to the Tickets page" class="current"><span>Tickets</span></a></li>
			</ul>
		</div>
		<div class="clear">
		</div>
		<div id="Layout">
			<div class="typography">
				<h2>Tickets</h2>
				<?php
					if(isset($_GET['tx']))
					{
						$tx = $_GET['tx'];
						// Check for ticket in db first

						$dbusername = "cantabilemusic";
						$dbpassword = "DT5D9QmTMLK4a8hF";
						$database = "Tickets";

						$gotDetail = false;

						if( !$con = @mysql_connect('localhost', $dbusername, $dbpassword) )
						{
						    // perhaps log this error here rather than outputting to the screen cause it will push
						    // database name to the screen
						    die('Could not connect to database: ' . mysql_error());
						}

						mysql_select_db($database);

						$sql = "select * from Ticket where TxnId='". $tx ."'";

						$rs = mysql_query($sql);

						$keyarray = array();
						if(mysql_num_rows($rs) == 0)
						{
							// Init cURL
							$request = curl_init();

							// Set request options
							curl_setopt_array($request, array
							(
							  CURLOPT_URL => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
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
							for ($i=0; $i<count($lines);$i++)
							{
								list($key,$val) = explode("=", $lines[$i]);
								$keyarray[urldecode($key)] = urldecode($val);
								$valName = urldecode($key);
								$valVal = urldecode($val);
								//print $valName.' - '.$valVal.'<br>';
							}

							if (in_array('payment_status', $keyarray))
							{
								$gotDetail = true;
							}

							// insert into db

							$adult = 0;
							$child = 0;

							if ($keyarray['item_name1'] == "Adult Ticket")
							{
								$adult = $keyarray['quantity1'];
							}
							else
							{
								$child = $keyarray['quantity1'];
							}

							if (in_array('item_name2', $keyarray))
							{
								if ($keyarray['item_name2'] == "Adult Ticket")
								{
									$adult = $keyarray['quantity2'];
								}
								else
								{
									$child = $keyarray['quantity2'];
								}
							}

							$sql = "insert into Ticket(TxnId, Email, AdultTickets, ChildTickets, PayerId, Date, Status, Total) VALUES('".$tx."', '".$keyarray['payer_email']."', ".$adult.",".$child.", '".$keyarray['payer_id']."', '".$keyarray['payment_date']."', '".$keyarray['payment_status']."', '".$keyarray['mc_gross']."');";
							$rs = mysql_query($sql);
							//print $sql.'<br>';
						}
						else
						{
							$gotDetail = true;
							$row = mysql_fetch_array($rs);
							$keyarray['num_cart_items'] = 2;
							$keyarray['item_name1'] = "Adult Ticket";
							$keyarray['quantity1'] = $row['AdultTickets'];
							$keyarray['item_name2'] = "Child Ticket";
							$keyarray['quantity2'] = $row['ChildTickets'];
						}

						if ($gotDetail)
						{
							print '<ul>';
							$cart_items = $keyarray['num_cart_items'];
							for ($j=1; $j <= $cart_items; $j++)
							{
								print '<li>';
								print $keyarray['item_name'.$j];
								print ' x ';
								print $keyarray['quantity'.$j];
								print '</li>';
							}
							print '</ul>';

							print '<center><img src="/barcode.php?width=600&barcode='.$tx.'&quality=75"></center>';
						}
						else
						{
							print 'Failed to find transaction, please contact <a href="mailto://natalie@cantabilemusic.com.au">Cantabile Music</a>';
						}
					}
				?>
				<a href="#" id="PrintButton">Print</a>
				<script type="text/javascript">
					$(document).ready(function() {
						$('#PrintButton').click(function()
						{
							window.print();
							return false;
					 	});
					});
				</script>
				</div>
		</div>
		<div class="clear">
		</div>
	</div>
	<div id="Footer">
		<div class="footerTop">
			<!-- -->
		</div>
		<p>
			Copyright &copy; 2007-2008 | Powered by <a href="http://www.silverstripe.org" title="This site runs on the SilverStripe CMS">SilverStripe Open Source CMS</a>
		</p>
	</div>

</div>
<script type="text/javascript">//<![CDATA[
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">try{
var pageTracker = _gat._getTracker("UA-26348690-1");
pageTracker._trackPageview();
} catch(err) {}
//]]></script>
</body>
</html>
