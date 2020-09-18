<?php
	session_start();

	$data = $_REQUEST;
	$name = $data['nai'];

	$_SESSION[$name] = $data;

	file_put_contents('tmp_responses/'.$name.".txt", json_encode($data));