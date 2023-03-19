<!DOCTYPE html>
<html>
<head>
    <title>Employee Detail</title>
</head>
<body>
    <h1>Employee Detail</h1>
    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo $employee['name']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $employee['email']; ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><?php echo $employee['phone']; ?></td>
        </tr>
    </table>
    <br>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
