<html>
<head><title>P-5 課題</title></head>
<body>
<?php
    //人物データの登録
    $person1 = ["name" => "一郎", "age" => 25, "hobby" => "サッカー"];
    $person2 = ["name" => "二郎", "age" => 30, "hobby" => "読書"];

    //人物リストの作成
    $people = array_merge([$person1], [$person2]);

    //並び替え（年齢順）
    $ages = array_column($people, "age");
    array_multisort($ages, SORT_ASC, $people);

    //出力
    foreach ($people as $person) {
        echo "名前：{$person['name']} ({$person['age']}歳) - 趣味：{$person['hobby']}<br>";
    }

    //平均値
    $average = array_sum($ages) / count($ages);
    echo "平均年齢：" . $average . "歳";
?>
</body>
</html>