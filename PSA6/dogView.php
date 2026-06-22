<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>DJ Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>DJ Dog Records</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Address</th>
        <th>Color</th>
        <th>Height (cm)</th>
        <th>Weight (kg)</th>
    </tr>

<?php
$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['breed']."</td>
                <td>".$row['age']."</td>
                <td>".$row['address']."</td>
                <td>".$row['color']."</td>
                <td>".$row['height']." cm</td>
                <td>".$row['weight']." kg</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No records found</td></tr>";
}
?>

</table>

<a href="homePage.php">Back to Home</a>
<a href="dogRegistration.php">Register Dog</a>

</body>
</html>