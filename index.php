
<?php 
$drivers = [
    [
        'id' => 1,
        'nom' => 'Jean Dupont',
        'telephone' => '0700112233',
        'voiture_id' => 1
    ],
    [
        'id' => 2,
        'nom' => 'Alice Kossi',
        'telephone' => '0800223344',
        'voiture_id' => 2
    ],
    [
        'id' => 3,
        'nom' => 'Mohamed Traoré',
        'telephone' => '0900334455',
        'voiture_id' => 3
    ],
    [
        'id' => 4,
        'nom' => 'Fatou Bayo',
        'telephone' => '1000445566',
        'voiture_id' => 1
    ],
    [
        'id' => 5,
        'nom' => 'Sophie Diallo',
        'telephone' => '1100556677',
        'voiture_id' => 2
    ]

];

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
require_once(__DIR__ . '/includes/config.php');
require_once(ROOT_PATH . '/includes/header.php');
 ?>
    <h1 class="text-center">Bienvenue sur TaxiManager</h1>
    <p class="text-center">Plateforme de gestion des chauffeurs, fournisseurs et voitures.</p>

    <div class="row text-center mt-4">
        <div class="col-md-4">
            <a href="drivers/index.php" class="btn btn-primary w-100">Gérer les Chauffeurs</a>
        </div>
        <div class="col-md-4">
            <a href="providers/index.php" class="btn btn-success w-100">Gérer les Fournisseurs</a>
        </div>
        <div class="col-md-4">
            <a href="cars/index.php" class="btn btn-warning w-100">Gérer les Voitures</a>
        </div>
    </div>
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

<?php 

require_once(__DIR__ . '/includes/config.php');
require_once(ROOT_PATH . '/includes/footer.php');
?>

