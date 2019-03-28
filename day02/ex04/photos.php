#!/usr/bin/php
<?php

function	ft_display_images($str)
{
	preg_match_all("<(img|IMG).*(src|SRC)=(['\"])([^ ]*)\g{-2} .*>", $str, $match);
	foreach ($match[4] as $val)
		echo "$val\n";
}

if ($argc > 1)
{
	$c = curl_init($argv[1]);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, True);
	$str = curl_exec($c);
	if ($str == false)
		echo "Error\n";
	else
		ft_display_images($str);
}
?>
