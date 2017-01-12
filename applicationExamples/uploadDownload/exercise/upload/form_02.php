<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="action_05.php" method="post" enctype="multipart/form-data">
    请选择上传的文件<input type="file" name="myFile1"><br>
    请选择上传的文件<input type="file" name="myFile2"><br>
    请选择上传的文件<input type="file" name="myFile[]"><br>
    请选择上传的文件<input type="file" name="myFile[]"><br>
    请选择上传的文件<input type="file" name="myFile[]" multiple="multiple"><br>
    <input type="submit" value="上传文件">
</form>
</body>
</html>
