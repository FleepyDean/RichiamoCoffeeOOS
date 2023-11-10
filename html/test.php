<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Test</title>
</head>
<body>
    <form action="test.php" method="post">
        <input type="text" name="test_input">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
