<html>
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