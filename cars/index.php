<?php
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');

$query = "
    SELECT 
        cars.id, cars.brand, cars.model, cars.niv, 
        drivers.first_name, drivers.last_name 
    FROM cars
    LEFT JOIN drivers ON cars.driver_id = drivers.id
";

$stmt = $pdo->prepare($query);
$stmt->execute();
$cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once(ROOT_PATH . '/includes/header.php');
?>

<h1 class="text-center">Liste des Voitures</h1>

<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Immatriculation</th>
            <th>Chauffeur</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cars as $car): ?>
            <tr>
                <td><?= htmlspecialchars($car['id']) ?></td>
                <td><?= htmlspecialchars($car['brand']) ?></td>
                <td><?= htmlspecialchars($car['model']) ?></td>
                <td><?= htmlspecialchars($car['niv']) ?></td>
                <td>
                    <?= $car['first_name'] && $car['last_name']
                        ? htmlspecialchars($car['first_name'] . ' ' . $car['last_name'])
                        : 'Aucun chauffeur assigné' ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= urlencode($car['id']) ?>" class="btn btn-primary">Modifier</a>
                    <a href="delete.php?id=<?= urlencode($car['id']) ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="text-center mt-4">
    <a href="add.php" class="btn btn-primary">Ajouter une Voiture</a>
</div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>
