<?php

class encryption_decryption {

	private $key = "Secret!"; // define secret key for encryption and decryption

	function processing( $string, $encrypt ){

		$in = $string;
		$out = ""; // define variable for encrypt

		for ($i = 0; $i < strlen($in); $i++)
		{
			$encrypt ? $out .= ( $in[$i] ^ $this->key[ $i % strlen($this->key) ] ) << 2 
					 : $out .= ( $in[$i] ^ $this->key[ $i % strlen($this->key) ] );
		}
		
		return $out;
	}

}

$ED = new encryption_decryption();

$input_text  = "Hello World!";

$cipher      = $ED->processing($input_text, "true");

$source_text = $ED->processing($cipher, "false");

?>

<!-- tables for visual displaying -->

<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>Input text</th>
	</tr>
	<tr>
		<td><?php echo $input_text; ?></td>
	</tr>
</table>

<span>></span>

<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>Cipher</th>
	</tr>
	<tr>
		<td><?php echo $cipher; ?></td>
	</tr>
</table>

<span>></span>

<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>Source code</th>
	</tr>
	<tr>
		<td><?php echo $source_text; ?></td>
	</tr>
</table>

<!-- styles for table to make it looks a bit more convenient -->

<style>
 table{text-align: left; display:inline-block; vertical-align: middle;}
 table tr td, table tr th {padding: 6px 15px;}
</style>