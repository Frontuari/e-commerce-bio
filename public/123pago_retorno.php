<?php
	$data = json_encode($_REQUEST);

	file_put_contents("123pago.txt", $data);