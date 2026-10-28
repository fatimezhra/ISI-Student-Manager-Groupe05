<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des projets</title>
</head>
<body>
    <h1>Liste des projets</h1>

    <?php
    $projets = [
        ["titre" => "Gestion de stock", "responsable" => "Sara"],
        ["titre" => "Site e-commerce", "responsable" => "Youssef"],
        ["titre" => "Application de réservation", "responsable" => "Amine"]
    ];
    ?>

    <table border="1">
        <tr>
            <th>Projet</th>
            <th>Responsable</th>
        </tr>

        <?php foreach ($projets as $projet): ?>
        <tr>
            <td><?= htmlspecialchars($projet["titre"]) ?></td>
            <td><?= htmlspecialchars($projet["responsable"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>
