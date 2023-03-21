<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <!-- 
        NCCS College:
        Q.12 Write PHP function that accepts username and password as arguments
        and check credentials in 'user' table in the database, if record found
        welcome the user with welcome message. If not found redirect the user 
        into the login page. Make your own assumption for the database. 
    -->
    <form method="POST" action="login-process.php">
        Username: <input type="text" name="uName"><br><br>
        Password: <input type="password" name="uPass"><br><br>
        <input type="submit" value="Log In">
    </form>
</body>

</html>