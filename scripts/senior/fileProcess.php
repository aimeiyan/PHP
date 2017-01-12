<html>
<head>
    <meta charset="utf-8">
    <title>文件处理</title>
</head>
<body>
<?php
$file = fopen("welcome.txt", "r") or exit("Unable to open file!");
fclose($file);

if (feof($file)) echo "文件结尾";
?>
</body>
</html>