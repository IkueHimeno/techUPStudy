<?php

//課題１
$now = date("Y-m-d H:i:s");
printf("現在、%s\n<br><br>", $now);

//課題２
$today = date("Y年m月d日");
$tommorow = date("Y年m月d日", strtotime("+1 day"));
$oneweek = date("Y年m月d日", strtotime("+7 day"));

printf("今日は%sです。\n<br>", $today);
printf("明日は%sです。\n<br>", $tommorow);
printf("１週間後は%sです。\n<br><br>", $oneweek);

//課題３
$anytime = date("Y-m-d");
$someday = date("Y年m月d日", strtotime("+1 month", strtotime($anytime)));
printf("%sの１ヶ月後は、%sです。\n", $today, $someday);