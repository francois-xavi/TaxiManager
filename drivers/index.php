
<?php
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');

$stmt = $pdo->prepare("SELECT * FROM drivers");
$stmt->execute();
$drivers = $stmt->fetchAll(PDO::FETCH_ASSOC);
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/header.php');
?>
    <h1 class="text-center">Liste des chauffeurs</h1>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom et Prénoms</th>
                <th>Téléphone</th>
                <th>Années d'expérience</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drivers as $driver): ?>
                <tr> 
                    <td><?= $driver['id']; ?></td>
                    <td><?= $driver['last_name'].'  '.$driver['first_name']; ?></td>
                    <td><?= $driver['phone']; ?></td>
                    <td><?= $driver['year_experience']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $driver['id']; ?>" class="btn btn-primary">Modifier</a>
                        <a href="delete.php?id=<?= $driver['id']; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="add.php" class="btn btn-success">Ajouter un chauffeur</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>
