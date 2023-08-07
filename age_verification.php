<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
</head>

<body>
    <form action="age_verification.php" method="POST">
        <label for="age">Enter your age</label>
        <br>
        <input type="text" name="age" placeholder="Enter your age">
        <input type="submit" value="Verify Me">
    </form>

    <?php
    $age = $_POST["age"];
    if ($age >= 21) {
        echo "You are allowed to enter";
    } else {
        echo "Your age is $age and You are not allowed to enter";
    }
    ?>
</body>

</html>

<!-- methods in html -->
<!-- GET, POST, PUT, Delete -->


<!-- Task -->
১। একটা ফরম তৈরি করবেন। সেখানে ইনপুট নিবেন ইউজারের নাম ও বয়স।
২। সার্ভারে আপনারা এই নাম আর বয়সটা দেখাবেন।
<!-- Task end -->