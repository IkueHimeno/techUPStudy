<html>
<head><title>P-4 課題</title></head>
<body>
    <center>
        <form method="post">
            <input type="text" name="username">
            <input type="submit" value="送信">
        </form>
    </center>
    <?php

    try {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];

            if(empty($username)) {
                throw new Exception("名前が入力されていません");
            }

            setcookie("username", $username, time() + 10);
            echo "<p>" . "「{$username}」を保存しました。" . "</p>";
        }

        if (isset($_COOKIE["username"])) {
            echo "<p>" . "{$_COOKIE["username"]}" . "</p>";
        }
    } catch (Exception $e) {
        echo "<p style='color:red;'>エラー:" . $e -> getMessage() . "</p>";
    }
    ?>
<head><title>P-3 課題</title></head>
<body>
<?php

$fp = fopen("member.csv", "r");

while (($line = fgetcsv($fp)) !== false){
    foreach ($line as $c){
        echo $c . "<br />"; 
    }
}

fclose($fp);
?>
</body>
</html>