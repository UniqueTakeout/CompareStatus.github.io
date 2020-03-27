<? php
	include 'functions.php';

	$platform = 'pc';
	$epicNickname = 'UniqueTakeout';

	$playerStats = getPlayerStats( $platform, $epicNickname);

	echo '<pre>';
	print_r( $playerStats);
	die(0);
?>