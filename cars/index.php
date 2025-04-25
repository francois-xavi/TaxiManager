
<?php

$voitures = [
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
<div class="container mt-5">
    <h1 class="text-center">Liste des Voitures</h1>

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
            <?php foreach ($voitures as $voiture): ?>
                <tr>
                    <td><?= $voiture['id']; ?></td>
                    <td><?= $voiture['marque']; ?></td>
                    <td><?= $voiture['modele']; ?></td>
                    <td><?= $voiture['immatriculation']; ?></td>
                    <td><?= $voiture['fournisseur_id']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="ajouter_voiture.php" class="btn btn-primary">Ajouter une Voiture</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

