<html>
<head>
    <meta charset="utf-8">
    <title>PHP Live Search</title>
</head>
<body>
<form>
    <p>在下面的文本框中搜索 W3CSchool 的页面:</p>
    <input type="text" size="30" onkeyup="showResult(this.value);">
    <div id="liveSearch"></div>
</form>
<script>

    function showResult(str) {
        var xmlhttp;
        if (str.length == 0) {
            document.getElementById("liveSearch").innerHTML = "";
            document.getElementById("liveSearch").style.border = "0px";
            return;
        }

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject();
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {  //表示后台处理完成了（xmlhttp.readyState == 4），而且处理的结果是OK（xmlhttp.status == 200）。
                document.getElementById("liveSearch").innerHTML = xmlhttp.responseText;
                document.getElementById("liveSearch").style.border = "1px solid #A5ACB2";
            }
        };

        xmlhttp.open("GET", "liveSearch.php?q=" + str, true);
        xmlhttp.send();

    }
</script>
</body>
</html>