<?php
$projets = [
    "Gestion de stock",
    "Site e-commerce",
    "Application de réservation",
];
?>
<h1>Liste des projets</h1>
<ul>
<?php foreach ($projets as $p): ?>
  <li><?= htmlspecialchars($p) ?></li>
<?php endforeach; ?>
</ul>
