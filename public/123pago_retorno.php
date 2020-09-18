<?php
	$data = $_REQUEST;
	$name = $data['nai'];

	file_put_contents("tmp_responses/".$name.".txt", json_encode($data));