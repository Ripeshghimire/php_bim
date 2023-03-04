<html>

<head>
    <title>Date Difference Calculator</title>
</head>

<body>
    <!-- 
        Q. Create a function that calculates the difference between 
           two dates entered in a form using PHP. 
    -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="date1">Enter the first date (yyyy-mm-dd):</label>
        <input type="date" id="date1" name="date1">
        <br><br>
        <label for="date2">Enter the second date (yyyy-mm-dd):</label>
        <input type="date" id="date2" name="date2">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];

    $difference = dateDifference($date1, $date2);
    echo ("The difference is: {$difference['years']} years, {$difference['months']} months and {$difference['days']} days");
}

function dateDifference($date1, $date2)
{
    $date1 = strtotime($date1);
    $date2 = strtotime($date2);

    $diff = abs($date2 - $date1);

    $years = floor($diff / (365 * 60 * 60 * 24));;
    $months = floor($diff / (60 * 60 * 24 * 30));
    $days = floor($diff / (60 * 60 * 24));

    return array(
        'years' => $years,
        'months' => $months,
        'days' => $days
    );
}
?>