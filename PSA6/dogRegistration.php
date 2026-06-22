<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>DJ Dog Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>DJ Dog Registration</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="breed" placeholder="Breed" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="text" name="address" placeholder="Address" required>
    <input type="text" name="color" placeholder="Color" required>
    <input type="number" step="0.01" name="height" placeholder="Height (cm)" required>
    <input type="number" step="0.01" name="weight" placeholder="Weight (kg)" required>
    <button type="submit" name="submit">Save</button>
</form>

<a href="homePage.php">Back to Home</a>
<a href="dogView.php">View Dogs</a>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', $age, '$address', '$color', $height, $weight)";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Record saved!</p>";
    } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>