<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculate ATM Card Expiry Date</title>
</head>

<body>
    <!-- 
        Q15. Based on the given date in ATM Card, write PHP program 
             to check if it is expired or not. 
    -->
    <h2>Calculate ATM Card Expiry</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="date" name="currentDate"><br><br>
        <input type="submit" value="Calculate"><br><br>
    </form>
</body>

</html>
<?php
function calculateExpiry($currentDate)
{
    $currentDate = date('Y-m-d', strtotime($currentDate));

    $expiryDate = date('Y-m-d', mktime(0, 0, 0, 1, 1, 2024));

    if ($currentDate > $expiryDate) {
        echo "Your ATM has been expired.";
    } else {
        echo "You ATM Card has validity left.";
    }
}

if (isset($_POST['currentDate'])) {
    calculateExpiry($_POST['currentDate']);
}
?>