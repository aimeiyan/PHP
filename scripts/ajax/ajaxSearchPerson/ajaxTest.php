<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<p><b>在输入框中输入一个姓名：</b></p>

<form action="">
    姓名：<input type="text" onkeyup="showHint(this.value);">

    <p>返回值:<span id="txtHint"></span></p>
</form>
<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }

        if (window.XMLHttpRequest) {
            //code for IE7+ Firefox Chrome Opera Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            //code for IE5 IE6
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };

        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();


    }
</script>
</body>
</html>