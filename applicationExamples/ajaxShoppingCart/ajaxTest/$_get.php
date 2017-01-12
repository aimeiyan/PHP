<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>$_get的PHP</title>
</head>
<body>
<button>发送ajax</button>
<div class="text"></div>

<script type="" src="../../../js/jquery-1.11.3.min.js"></script>
<script>
    $(function () {
        $("button").click(function () {
//            $.get('$_get_handle.php', {"username": "科学家","age":30}, function (data) {
//                $(".text").html(data);
//            })


//            $.post('$_get_handle.php', {"username": "科学家","age":30}, function (data) {
//                $(".text").html(data);
//            })


            $.ajax({
                url: '$_get_handle.php',
                data: {
                    "username": "科学家",
                    "age": 30
                },
                type:'post',
                success:function(data){
                    $(".text").html(data);
                }
            })

        })
    })
</script>
</body>
</html>