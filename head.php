<?php include('config.php') ?>
<?php include('userconf.php') ?>

<meta charset="UTF-8">
<title><?php echo htmlspecialchars("$user") . "'s links"?></title>

<link rel="stylesheet" href="css/main.css">

<?php 
	echo("<link rel='stylesheet' href='css/themes/" . htmlspecialchars("$theme") . ".css'>");
	echo("<link rel='icon' type='image/x-icon' href='" . "$icon" . "'>");
?>
