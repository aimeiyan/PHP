<html>
<head>
    <meta charset="utf-8"/>
    <title>ajax 和 XML</title>
</head>
<body>
<form>
    Select a CD:
    <select name="cds" id="" onchange="showCD(this.value)">
        <option value="">Select a CD:</option>
        <option value="Bob Dylan">Bob Dylan</option>
        <option value="Bonnie Tyler">Bonnie Tyler</option>
        <option value="Dolly Parton">Dolly Parton</option>
    </select>
</form>
<div id="txtHint"><b>CD info will be listed here...</b></div>
<script type="text/javascript">
    function showCD(str) {
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
        xmlhttp.open("GET", "getcd.php?q=" + str, true);
        xmlhttp.send();
    }
</script>
</body>
</html>