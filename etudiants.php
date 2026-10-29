<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des étudiants</h1>

    <?php
    $etudiants = [
        ["nom" => "Sara", "filiere" => "ISI"],
        ["nom" => "Youssef", "filiere" => "ISI"],
        ["nom" => "Amine", "filiere" => "ISI"]
    ];
    ?>

    <table>
        <tr>
            <th>Nom</th>
            <th>Filière</th>
        </tr>

        <?php foreach ($etudiants as $etudiant): ?>
        <tr>
            <td><?= htmlspecialchars($etudiant["nom"]) ?></td>
            <td><?= htmlspecialchars($etudiant["filiere"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>
