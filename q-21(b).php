<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Data</title>
</head>
<body>
    <h1>Retrieve Data</h1>

    <?php
    // Connect to the database
    $host = "localhost";
    $username = "your_username";
    $password = "your_password";
    $database = "your_database";
    $conn = new mysqli($host, $username, $password, $database);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the database
    $query = "SELECT * FROM users";
    $result = $conn->query($query);

    // Display the data in a table
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
