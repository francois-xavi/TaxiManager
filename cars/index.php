
<?php

// List of cars with their details
// This is a mock data array simulating a database query result
// Include the database connection and header
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');
$stmt = $pdo->prepare("SELECT * FROM cars");
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
                <th>chauffeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $car): ?>
                <tr>
                    <td><?= $car['id']; ?></td>
                    <td><?= $car['brand']; ?></td>
                    <td><?= $car['model']; ?></td>
                    <td><?= $car['niv']; ?></td>
                    <td><?= $car['driver_id']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $car['id']; ?>" class="btn btn-primary">Modifier</a>
                        <a href="delete.php?id=<?= $car['id']; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="add.php" class="btn btn-primary">Ajouter une Voiture</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

