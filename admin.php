<?php

function rand_str($length = 32, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890')
{
    // Length of character list
    $chars_length = (strlen($chars) - 1);

    // Start our string
    $string = $chars{rand(0, $chars_length)};

    // Generate random string
    for ($i = 1; $i < $length; $i = strlen($string))
    {
        // Grab a random character from our list
        $r = $chars{rand(0, $chars_length)};

        // Make sure the same two characters dont appear next to each other
        if ($r != $string{$i - 1}) $string .=  $r;
    }

    // Return the string
    return $string;
}

function TicketFound($tx)
{
	header('Location: ticketfinish.php?tx='.$tx);
}

function TicketNotFound()
{
	$_SESSION['status'] = 'Not Found';
}

	session_start();

	$action = $_POST['action'];
	if ($action == "login" && $_POST['secret'] == "bumbleface")
	{
		$_SESSION['loggedin'] = true;
	}

    if(!isset($_SESSION['loggedin']))
    {
?>
<html>
	<head>
		<title>
			Admin
		</title>
	</head>
	<body>
		<form action="admin.php" method="post">
			<h1>Login</h1>
			Secret: <input id="secret" name="secret" size=100><br>
			<input type="hidden" name="action" value="login">
			<input type="submit">
		</form>
	</body>
</html>

<?php
		return;
	}

	if (isset($_POST['Action']))
	{
		$action = $_POST['Action'];
		if ($action == "Clear")
		{
			session_destroy();
			header('Location: admin.php');
			end;
		}

		if ($action == "Search")
		{
			$dbusername = "cantabilemusic";
			$dbpassword = "DT5D9QmTMLK4a8hF";
			$database = "Tickets";

			if( !$con = @mysql_connect('localhost', $dbusername, $dbpassword) )
			{
				// perhaps log this error here rather than outputting to the screen cause it will push
				// database name to the screen
				die('Could not connect to database: ' . mysql_error());
			}

			mysql_select_db($database);

			$sql = "select * from Ticket where Email='". $_POST['Email'] ."'";

			$rs = mysql_query($sql);

			$row = mysql_fetch_array($rs);

			if (mysql_num_rows($rs) == 0)
			{
				TicketNotFound();
			}
			else
			{
				TicketFound($row['TxnId']);
				end;
			}
		}
		if ($action == "Create")
		{
			if (!isset($_POST['Email']) || $_POST['Email'] == '')
			{
				TicketNotFound();
			}

			$adult = intval($_POST['Adult']);
			$child = intval($_POST['Child']);

			$dbusername = "cantabilemusic";
			$dbpassword = "DT5D9QmTMLK4a8hF";
			$database = "Tickets";

			if( !$con = @mysql_connect('localhost', $dbusername, $dbpassword) )
			{
				// perhaps log this error here rather than outputting to the screen cause it will push
				// database name to the screen
				die('Could not connect to database: ' . mysql_error());
			}

			mysql_select_db($database);

			$sql = "select * from Ticket where Email='". $_POST['Email'] ."'";

			$rs = mysql_query($sql);

			$row = mysql_fetch_array($rs);

			if (mysql_num_rows($rs) == 0)
			{
				$tx = rand_str(16);
				$found = true;

				while ($found)
				{
					$sql = "select * from Ticket where TxnId='". $tx ."'";

					$rs = mysql_query($sql);

					if (mysql_num_rows($rs) == 0)
					{
						$found = false;
					}
					else
					{
						$tx = rand_str(16);
					}
				}


				$sql = "insert into Ticket(TxnId, Email, AdultTickets, ChildTickets) VALUES('".$tx."', '".$_POST['Email']."', ".$adult.",".$child.");";
				$rs = mysql_query($sql);

				$sql = "select * from Ticket where Email='". $_POST['Email'] ."'";

				$rs = mysql_query($sql);

				$row = mysql_fetch_array($rs);
			}

			TicketFound($row['TxnId']);
		}
	}
?>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<?php if (isset($_SESSION['status'])) print $_SESSION['status']; ?>
	<form action="admin.php" method="post">
	E-mail: <input type="text" name="Email" />
	<input type="hidden" name="Action" value="Search">
	<input type="submit" value="Find">
	</form>

	<form action="admin.php" method="post">
	E-mail: <input type="text" name="Email" /><br>
	Adult: <input type="number" name="Adult" /><br>
	Child: <input type="number" name="Child" /><br>
	<input type="hidden" name="Action" value="Create">
	<input type="submit" value="Create">
	</form>

	<form action="admin.php" method="post">
	<input type="hidden" name="Action" value="Clear">
	<input type="submit" value="Clear">
	</form>
</body>
</html>
<?php
?>