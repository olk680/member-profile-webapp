<?php include "database.php"; ?>

<h1>Member List</h1>
<a href="add.php">Add Member</a>
<hr>

<?php
$stmt = $pdo->query("SELECT * FROM members ORDER BY created_at DESC");

while ($row = $stmt->fetch()) {
    echo "<div style='border:1px solid #ccc; margin:10px; padding:10px;'>";
    echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
    echo "<p>" . htmlspecialchars($row['description']) . "</p>";

    if ($row['image_path']) {
        echo "<img src='" . $row['image_path'] . "' width='120'><br>";
    }

    echo "<a href='view.php?id={$row['id']}'>View</a> | ";
    echo "<a href='edit.php?id={$row['id']}'>Edit</a> | ";
    echo "<a href='delete.php?id={$row['id']}'>Delete</a>";
    echo "</div>";
}
?>