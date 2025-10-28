<?php
require_once 'patient.php';
?>
<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8">
    <head>
        <title>techUP オブジェクト指向 課題</title>
    </head>
    <body>
<?php
    $patient = new Patient('山田太郎', 30, 'm', 1.65, 63.5);

    print($patient -> selfIntroduction());
    print('<br>身長：' . $patient -> getHeight() . 'm');
    print('<br>体重：' . $patient -> getWeight() . 'kg');
    print('<br><br>');
    print('標準体重は' . $patient -> calculateStandardWeight() . 'kgです。');
?>
    </body>
</html>