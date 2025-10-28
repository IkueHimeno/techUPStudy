<?php

$d = date("Y-m-d H:i:s");
printf("現在、%s<br>", $d);

$today = date("Y年m月d日");
$tomorrow = date("Y年m月d日", strtotime("+1 day"));
$yesterday = date("Y年m月d日", strtotime("-1 day"));
$oneweek = date("Y年m月d日", strtotime("+7 day"));

printf("今日は%sです。<br>", $today);
printf("明日は%sです。<br>", $tomorrow);
printf("昨日は%sです。<br>", $yesterday);
printf("一週間後は%sです。<br>", $oneweek);

$kyou = new DateTime();
$threemonths = (new DateTime()) -> modify('+3 months');

$diff = $kyou -> diff($threemonths);

echo "３ヶ月後は" . $threemonths -> format('Y年m月d日') . "です。<br>";
echo "３ヶ月後の日付まで" . $diff -> days . "日です。";