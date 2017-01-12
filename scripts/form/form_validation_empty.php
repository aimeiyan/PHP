<html>
<head>
    <meta charset="UTF-8">
    <title>表单验证</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<h2>PHP Form Validation Example</h2>
<?php
// define variables and set to empty values
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $genderErr = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name if required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email if required";
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["website"])) {
        $websiteErr = "website if required";

    } else {
        $website = test_input($_POST["website"]);
    }
    $comment = test_input($_POST["comment"]);

    if (empty($_POST["gender"])) {
        $genderErr = "gender if required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off">
    Name: <input type="text" name="name"><span class="error">*<?php echo $nameErr; ?></span>
    <br>
    <br>
    E-mail: <input type="text" name="email"><span class="error">*<?php echo $emailErr; ?></span>
    <br>
    <br>
    Website: <input type="text" name="website"><span class="error">*<?php echo $websiteErr; ?></span>
    <br>
    <br>
    comment:<textarea name="comment" rows="5" cols="40"></textarea>
    <br>
    <br>
    gender:<input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">male<span class="error">*<?php echo $genderErr; ?></span>
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
echo "<h2>Your input:</h2><br>";
echo $name . "<br>";
echo $email . "<br>";
echo $website . "<br>";
echo $comment . "<br>";
echo $gender . "<br>";
?>
</body>
</html>