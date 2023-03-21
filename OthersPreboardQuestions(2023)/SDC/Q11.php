<?php
$students = array(
    array(
        'name' => 'Ram',
        'address' => 'Kathmandu',
        'grade' => 70
    ),
    array(
        'name' => 'Shyam',
        'address' => 'Maitighar',
        'grade' => 40
    ),
    array(
        'name' => 'Hari',
        'address' => 'Biratnagar',
        'grade' => 100
    ),
    array(
        'name' => 'Jeevan',
        'address' => 'Kathmandu',
        'grade' => 30
    )
);
?>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        .fail {
            background-color: red;
        }
    </style>
</head>

<body>
    <!-- 
        Q11. Create an array with four students with attributes(name, address, grade).
             Display the student data into html table and highlight the row if the grade
             of student is less than 50%. 
    -->
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Grade</th>
        </tr>

        <?php
        foreach ($students as $key => $info) {
            if ($info['grade'] < 50) {
                echo "<tr class = 'fail'>";
            } else {
                echo "<tr>";
            }

            echo "<td>" . $info['name'] . "</td>";
            echo "<td>" . $info['address'] . "</td>";
            echo "<td>" . $info['grade'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>