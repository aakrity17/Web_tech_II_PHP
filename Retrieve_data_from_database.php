<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "College";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the Student table
$sql = "SELECT sno, name, address, age FROM Student";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Display the data in a table
    echo "<table>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
            </tr>";
    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["sno"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["address"]."</td>
                <td>".$row["age"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
