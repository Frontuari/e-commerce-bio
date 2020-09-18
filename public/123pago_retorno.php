<?php
	session_start();

	$data = $_REQUEST;
	$name = $data['nai'];

	file_put_contents($name.".txt", json_encode($data));