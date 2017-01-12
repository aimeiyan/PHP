<html>
<head>
    <meta charset="UTF-8">
    <title>表单验证完整版</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<h2>Form validation example</h2>
<p class="error">* required filed</p>
<?php
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $genderErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailErr = "Invalid Email";
        }
    }
    if (empty($_POST["website"])) {
        $websiteErr = "website is required";
    } else {
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["gender"])) {
        $genderErr = "website is required";
    } else {
        $gender = test_input($_POST["gender"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $gender)) {
            $genderErr = "Invalid URL";
        }
    }
    $comment = test_input($_POST["comment"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off">
    Name:<input type="text" name="name" value="<?php echo $name;?>"><span class="error">*<?php echo $nameErr;?></span><br><br>
    Email:<input type="text" name="email" value="<?php echo $email;?>"><span class="error">*<?php echo $emailErr;?></span><br><br>
    Website:<input type="text" name="website" value="<?php echo $website;?>"><span class="error">*<?php echo $websiteErr;?></span><br><br>
    Comment:<textarea name="comment" rows="3" value="<?php echo $comment;?>"></textarea><br><br>
    Gender:<input type="radio" name="gender" <?php if(isset($gender)&&$gender=="female") echo "checked";?> value="female">Female<input type="radio" name="gender" <?php if(isset($gender)&&$gender=="male") echo "checked";?> value="male"><span class="error">*<?php echo $genderErr;?></span><br><br>
    <input type="submit" value="submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>