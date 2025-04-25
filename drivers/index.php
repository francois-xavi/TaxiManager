
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

require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/header.php');
?>
    <h1 class="text-center">Liste des chauffeurs</h1>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Voiture</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drivers as $driver): ?>
                <tr> 
                    <td><?= $driver['id']; ?></td>
                    <td><?= $driver['nom']; ?></td>
                    <td><?= $driver['telephone']; ?></td>
                    <td><?= $driver['voiture_id']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="add.php" class="btn btn-primary">Ajouter une Voiture</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

