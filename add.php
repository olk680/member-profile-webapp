<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $description = $_POST["description"];

    $imagePath = null;

    if (!empty($_FILES["image"]["name"])) {
        $targetDir = "uploads/";
        $imagePath = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
    }

    $stmt = $pdo->prepare("INSERT INTO members (name, description, image_path) VALUES (?, ?, ?)");
    $stmt->execute([$name, $description, $imagePath]);

    header("Location: index.php");
}
?>

<h1>Add Member</h1>

<form method="POST" enctype="multipart/form-data">
    Name: <input type="text" name="name" required><br><br>
    Description:<br>
    <textarea name="description" required></textarea><br><br>
    Image: <input type="file" name="image"><br><br>
    <button type="submit">Add</button>
</form>