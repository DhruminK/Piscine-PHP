#!/usr/bin/php
<?php

function	ft_find_space($str)
{
	$i = 0;
	$was_space = 0;
	$isdelim = 0;
	while ($str[$i] && (preg_match("/[ \t]/", $str[$i])) == 1)
		$i = $i + 1;
	while ($str[$i])
	{
		$isdelim = preg_match("/[ \t]/", $str[$i]);
		if ($isdelim == 0 && $was_space == 1)
		{
			$was_space = 0;
			echo " $str[$i]";
		}
		elseif ($was_space == 0 && $isdelim == 1)
			$was_space = 1;
		elseif ($isdelim == 0)
			echo "$str[$i]";
		$i = $i + 1;
	}
	echo "\n";
}

if ($argc > 1)
	ft_find_space($argv[1]);

?>
