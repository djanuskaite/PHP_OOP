<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<?php
use Users\Student; // namespace/klases pavadinimas


$user1 = new Student ('Thom', 'thom@yahoo.com', 'Student', 9.5);
$user1->addDescription('Admin user'); ?>

<div>
<?php \Users\Show::ShowData($user1 -> getUserData());?>
</div>


</body>
</html>