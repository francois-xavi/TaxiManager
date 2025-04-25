
<?php

$providers = [
    [
        'id' => 1,
        'marque' => 'Toyota',
        'modele' => 'Corolla',
        'immatriculation' => 'AB123CD',
        'fournisseur_id' => 1
    ],
    [
        'id' => 2,
        'marque' => 'Peugeot',
        'modele' => '308',
        'immatriculation' => 'EF456GH',
        'fournisseur_id' => 2
    ],
    [
        'id' => 3,
        'marque' => 'Hyundai',
        'modele' => 'i10',
        'immatriculation' => 'IJ789KL',
        'fournisseur_id' => 1
    ]
];
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/header.php');
?>
    <h1 class="text-center">Liste des providers</h1>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Immatriculation</th>
                <th>Fournisseur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($providers as $provider): ?>
                <tr>
                    <td><?= $provider['id']; ?></td>
                    <td><?= $provider['marque']; ?></td>
                    <td><?= $provider['modele']; ?></td>
                    <td><?= $provider['immatriculation']; ?></td>
                    <td><?= $provider['fournisseur_id']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="ajouter_provider.php" class="btn btn-primary">Ajouter une provider</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

