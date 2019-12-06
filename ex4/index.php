<?php
$page = 'Exercice 4';
include '../header.php';
$cat = "Zoé";
$age = 12;
$weight = 4.2;
$regime= false;
echo "<p>$cat a $age ans et pèse $weight kg.</p>";
echo (boolval($regime) ? 'true' : 'false');
    ?>
<?php include '../footer.php'; ?>
