<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form method="post" action="../public/index.php?action=create">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>
        <br>
        <input type="submit" value="Lưu">
    </form>
</body>
</html>
