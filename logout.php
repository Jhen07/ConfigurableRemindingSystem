<?php
	require_once('Conn.php');

	if ($user->logout()) {
		header('Location: index.php');
	}
	echo "TRY AGAIN!";
?>
