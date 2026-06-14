<?php
include "database.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM members WHERE id = ?");
$stmt->execute([$id]);
$member = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];

    $stmt = $pdo->prepare("UPDATE members SET name=?, description=? WHERE id=?");
    $stmt->execute([$name, $description, $id]);

    header("Location: index.php");
}
?>

<h1>Edit Member</h1>

<form method="POST">
    Name: <input type="text" name="name" value="<?= htmlspecialchars($member['name']) ?>"><br><br>
    Description:<br>
    <textarea name="description"><?= htmlspecialchars($member['description']) ?></textarea><br><br>
    <button type="submit">Update</button>
</form>