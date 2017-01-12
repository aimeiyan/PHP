<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<form>
    <select name="users" id="" onchange="showUser(this.value);">
        <option value="">select a person</option>
        <option value="1">john doe</option>
        <option value="2">Mary moe</option>
        <option value="3">Julie Dooley</option>
    </select>
</form>
<br/>

<div id="txtHint"><b>person info will be listed here.</b></div>
<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };

        xmlhttp.open("GET", "getuser.php?q=" + str, true);
        xmlhttp.send();

    }
</script>
</body>
</html>