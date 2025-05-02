
<?php

// List of cars with their details
// This is a mock data array simulating a database query result
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
    ],
    [
        'id' => 4,
        'marque' => 'Ford',
        'modele' => 'Focus',
        'immatriculation' => 'KL012MN',
        'fournisseur_id' => 3
    ],
    [
        'id' => 5,
        'marque' => 'Nissan',
        'modele' => 'Micra',
        'immatriculation' => 'OP345QR',
        'fournisseur_id' => 2
    ],
    [
        'id' => 6,
        'marque' => 'Volkswagen',
        'modele' => 'Golf',
        'immatriculation' => 'ST678UV',
        'fournisseur_id' => 1
    ],
    [
        'id' => 7,
        'marque' => 'Chevrolet',
        'modele' => 'Cruze',
        'immatriculation' => 'WX901YZ',
        'fournisseur_id' => 3
    ],
    [
        'id' => 8,
        'marque' => 'Kia',
        'modele' => 'Rio',
        'immatriculation' => 'AB234CD',
        'fournisseur_id' => 2
    ],
    [
        'id' => 9,
        'marque' => 'Mazda',
        'modele' => '3',
        'immatriculation' => 'EF567GH',
        'fournisseur_id' => 1
    ],
    [
        'id' => 10,
        'marque' => 'Subaru',
        'modele' => 'Impreza',
        'immatriculation' => 'IJ890KL',
        'fournisseur_id' => 3
    ],
    [
        'id' => 11,
        'marque' => 'Honda',
        'modele' => 'Civic',
        'immatriculation' => 'MN123OP',
        'fournisseur_id' => 2
    ],
    [
        'id' => 12,
        'marque' => 'Hyundai',
        'modele' => 'Elantra',
        'immatriculation' => 'QR456ST',
        'fournisseur_id' => 1
    ],
    [
        'id' => 13,
        'marque' => 'Toyota',
        'modele' => 'Camry',
        'immatriculation' => 'UV789WX',
        'fournisseur_id' => 3
    ],
    [
        'id' => 14,
        'marque' => 'Ford',
        'modele' => 'Fiesta',
        'immatriculation' => 'YZ012AB',
        'fournisseur_id' => 2
    ],
    [
        'id' => 15,
        'marque' => 'Nissan',
        'modele' => 'Sentra',
        'immatriculation' => 'CD345EF',
        'fournisseur_id' => 1
    ]
];
require_once(__DIR__ . '/../includes/config.php');
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
        <a href="add.php" class="btn btn-primary">Ajouter une Voiture</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

