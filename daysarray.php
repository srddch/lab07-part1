<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Days of the Week</title>
</head>

<body>
    <h1>Days of the Week</h1>

    <?php
    $days = array(
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
    );

    echo "<p>The days of the week in English are: ";
    echo implode(", ", $days);
    echo ".</p>";
    ?>

</body>
</html>