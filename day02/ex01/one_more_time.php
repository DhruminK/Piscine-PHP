#!/usr/bin/php
<?php

function	ft_month_num($month)
{
	$month = strtolower($month);
	$month_arr = Array(	"janvier"	=> 1,
						"fevrier"	=> 2,
						"mars"		=> 3,
						"avril"		=> 4,
						"mai"		=> 5,
						"juin"		=> 6,
						"juillet"	=> 7,
						"aout"		=> 8,
						"septembre"	=> 9,
						"octobre"	=> 10,
						"novembre"	=> 11,
						"decembre"	=> 12);
	return ($month_arr[$month]);
}

if ($argc > 1)
{
	if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Ji]eudi|[Vv]endredi|[Ss]amedi|[Dd]imandche) ([1-2][0-9]|3[0-1]|0[1-9]|[1-9]) ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $match) == 1)
	{
		date_default_timezone_set("Europe/Paris");
		print(mktime($match[5], $match[6], $match[7], ft_month_num($match[3]), $match[2], $match[4]));
		print("\n");
	}
	else
		echo("Wrong Format\n");
}

?>
