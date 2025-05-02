
<?php
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');

$stmt = $pdo->prepare("SELECT * FROM drivers");
$stmt->execute();
$drivers = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $drivers = [
//     [
//         'id' => 1,
//         'nom' => 'Jean Dupont',
//         'telephone' => '0700112233',
//         'car_id' => 1
//     ],
//     [
//         'id' => 2,
//         'nom' => 'Alice Kossi',
//         'telephone' => '0800223344',
//         'car_id' => 2
//     ],
//     [
//         'id' => 3,
//         'name' => 'Mohamed Traoré',
//         'telephone' => '0900334455',
//         'car_id' => 3
//     ],
//     [
//         'id' => 4,
//         'nom' => 'Fatou Bayo',
//         'telephone' => '1000445566',
//         'car_id' => 1
//     ],
//     [
//         'id' => 5,
//         'nom' => 'Sophie Diallo',
//         'telephone' => '1100556677',
//         'car_id' => 2
//     ]

// ];

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
                <th>Voiture</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drivers as $driver): ?>
                <tr> 
                    <td><?= $driver['id']; ?></td>
                    <td><?= $driver['last_name'].$driver['first_name']; ?></td>
                    <td><?= $driver['phone']; ?></td>
                    <td><?= $driver['year_experience']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="add.php" class="btn btn-primary">Ajouter un chauffeur</a>
    </div>

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

