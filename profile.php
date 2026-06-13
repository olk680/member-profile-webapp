<?php
// connect to SQLite database
$db = new SQLite3('members.db');

// query data
$result = $db->query("SELECT * FROM members");

echo "<h2>Group Members</h2>";
echo "<ul>";

while ($row = $result->fetchArray()) {
    echo "<li>";
    echo $row['name'] . "<br>";
    
    // show image
    echo "<img src='" . $row['image'] . "' width='100'><br>";
    
    echo $row['email'];
    echo "</li><br>";
}

echo "</ul>";

echo "<br><a href='index.php'>Back to Home</a>";
?>
