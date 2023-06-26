<!DOCTYPE html>

<?php
	include('config.php');
	
	// redirect to link in "url.tld/?$redirectPath={}"
	$linkName=$_GET[$redirectPath];

	// only redirect if there is a value in ?site
	if ($linkName){
		header('Location: ' . $links[$linkName]);
		die();
	}

	// add trailing slash
	if (rtrim($_SERVER['REQUEST_URI'],"/") === $_SERVER['REQUEST_URI']){
		header('Location: ' . $_SERVER['REQUEST_URI'] . '/');
	}

?>

<html lang='en'>
	<head>
	<?php
		include('head.php');
	?>
	</head>
	<body>
		<span id='username'>
			<?php
				echo("<img alt='' src='$icon'></img>");
				echo('<h1>' . htmlspecialchars("$user") . '</h1>');
			?>
		</span>
	
		<div class='links'>
		<?php
				// print links
				foreach($links as $link_name => $link_url) {
					echo "<a rel='noreferrer' href='?$redirectPath=" . $link_name . "'>" . $link_name . '</a>';
					echo '<br>';			}
			?>
		</div>
	</body>
</html>
