
<?php

require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/header.php');
require_once(ROOT_PATH . '/includes/db.php');

$smtp = $pdo->prepare("SELECT * FROM providers");
$smtp->execute();
$providers = $smtp->fetchAll(PDO::FETCH_ASSOC);
?>
    <h1 class="text-center">Liste des fournisseurs</h1>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Télephone</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($providers as $provider): ?>
                <tr>
                    <td><?= $provider['id']; ?></td>
                    <td><?= $provider['name']; ?></td>
                    <td><?= $provider['supplier_type']; ?></td>
                    <td><?= $provider['phone']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $provider['id']; ?>" class="btn btn-primary">Modifier</a>
                        <a href="delete.php?id=<?= $provider['id']; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="add.php" class="btn btn-primary">Ajouter un fournisseur</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

