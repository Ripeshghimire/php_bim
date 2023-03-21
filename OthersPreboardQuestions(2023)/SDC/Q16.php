<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <!-- 
        Q16. The student table in database has field (id, name, address, gender).
         Read all the data from the table and write them into male.csv
         if the gender is male and into female.csv if the gender is female. 
    -->

    <table border="1">
        <tr>
            <th>ID.</th>
            <th>Name</th>
            <th>Address</th>
            <th>Gender</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'demo', 3306);
        $sql = "SELECT * FROM students";

        $query = mysqli_query($conn, $sql);
        $i = 1;

        if (mysqli_num_rows($query) <= 0) {
            echo "No data found in table.";
        } else {
            $male_data = fopen('male.csv', 'w');
            $female_data = fopen('female.csv', 'w');
            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['gender'] == 'male') {
                    fputcsv($male_data, $row);
                } else if ($row['gender'] == 'female') {
                    fputcsv($female_data, $row);
                }
        ?>
        <tr>
            <td><?php echo $i++ . "."; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
        <?php
            }
            fclose($male_data);
            fclose($female_data);
        }
        ?>
    </table>
</body>

</html>