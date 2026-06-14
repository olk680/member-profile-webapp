<?php
include "database.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM members WHERE id = ?");
$stmt->execute([$id]);
$member = $stmt->fetch();
?>

<h1><?= htmlspecialchars($member['name']) ?></h1>

<p><?= htmlspecialchars($member['description']) ?></p>

<?php if ($member['image_path']) : ?>
    <img src="<?= $member['image_path'] ?>" width="200">
<?php endif; ?>

<br><br>
<a href="index.php">Back</a>