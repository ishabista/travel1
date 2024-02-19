<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO packages (name, description, price) VALUES ('$name', '$description', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "New package added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Add New Package</h1>
    <form method="post" action="admin.php">
        Name: <input type="text" name="name" required><br>
        Description:<br> <textarea name="description" required></textarea><br>
        Price: <input type="number" name="price" step="0.01" required><br>
        <input type="submit" value="Add Package">
    </form>

    <h1>Current Packages</h1>
    <?php
    $sql = "SELECT * FROM packages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. " - Price: " . $row["price"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>