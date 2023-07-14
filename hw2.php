<!DOCTYPE html>
<html>
<head>
    <title>Employee Register Form</title>
</head>
<body>
    <h2>Employee Register Form</h2>
    <form method="POST" action="register.php">
        <label for="id">EmpID:</label>
        <input type="text" name="id" id="id" placeholder="Enter your Employee Id" required>
        <br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your Name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter your Password" required>
        <br><br>
        <label for="position">Position:</label>
        <input type="text" name="position" id="position" placeholder="Enter your Position" required>
        <br><br>
        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" placeholder="Enter your Salary" required>
        <br><br>
        <input type="submit" name="submit" value="Register">
    </form>
   

</body>
</html>