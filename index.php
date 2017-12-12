<?php

	$key = "Secret!"; // define secret key for encryption and decryption

	function encryption($string){

		global $key;
		$in = $string;
		$out = ""; // define variable for encrypt

		for ($i = 0; $i < strlen($in); $i++)
		{
				$out .= $in[$i] ^ $key[$i % strlen($key)];
		}
		
		return $out;
	}

	function decryption($string){

		global $key;
		$in = $string;
		$out = ""; // define variable for encrypt

		for ($i = 0; $i < strlen($in); $i++)
		{
				$out .= $in[$i] ^ $key[$i % strlen($key)];
		}
		
		return $out;
	}

	$cipher = encryption("Hello World!");
	echo "Cipher: " . $cipher . "<br>";

	$source_text = decryption($cipher);
	echo "Source text: " . $source_text . "<br>";
?>