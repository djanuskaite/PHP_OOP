<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<?php
use Users\Student; // namespace/klases pavadinimas

$user1 = new Student ('Thom', 'thom@yahoo.com', 'Student', 9.5);
$user1->addDescription('Admin user');
echo "<ul> User:";
foreach ($user1->getUserData() as $user) {
    echo "<li>$user</li> ";
}
echo "</ul>";
?>
</body>
</html>