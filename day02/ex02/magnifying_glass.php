#!/usr/bin/php
<?php

function		ft_display($line)
{
	$line = preg_replace_callback("/<a.*title=\"(.*)\">/",
					function ($matches) {
						return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
					}, $line);
	$line = preg_replace_callback("/<a.*>(.*)</",
					function ($matches){
						return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
					}, $line);
	$line = preg_replace_callback("/<a.*>(.*)<.*>(.*)<\/a>/",
					function ($matches) {
						$matches[0] = str_replace($matches[1], strtoupper($matches[1]), $matches[0]);
						$matches[0] = str_replace($matches[2], strtoupper($matches[2]), $matches[0]);
						return ($matches[0]);
					}, $line);
	echo "$line";
}

if ($argc > 1)
{
	$line = file_get_contents($argv[1]);
	if ($line)
		ft_display($line);
}

?>
