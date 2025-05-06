<?php
// method_exists($_SERVER, 'REQUEST_METHOD') && $_SERVER['REQUEST_METHOD'] === 'POST' or die('Accès interdit !');
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');

$error = [];
// $isFileLoaded = false;
// $licenceFileName = $_POST['old_licence'] ?? null;

// if (isset($_FILES['licence']) && $_FILES['licence']['error'] === UPLOAD_ERR_OK) {
//     // Generate a unique name for the file to avoid overwriting
//     // and move the uploaded file to the desired directory
//     $licenceFileName = uniqid() . '_' . basename($_FILES['licence']['name']);
//     move_uploaded_file($_FILES['licence']['tmp_name'], __DIR__ . '/uploads/' . $licenceFileName);
// }

// if (isset($_FILES['licence']) && isset($_FILES['licence']['error']) && $_FILES['licence']['$error'] === 0) {
//     if ($_FILES['licence']['size'] > 1000000) {
//         $error['licence'] = "L'envoi n'a pas pu être effectué, erreur ou image trop volumineuse";
//         return;
//     }

//     $fileInfo = pathinfo($_FILES['licence']['name']);
//     $extension = $fileInfo['extension'];
//     $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'pdf', 'docx'];
//     if (!in_array($extension, $allowedExtensions)) {
//         echo "L'envoi n'a pas pu être effectué, l'extension {$extension} n'est pas autorisée";
//         return;
//     }

//     $path = __DIR__ . '/uploads/';
//     if (!is_dir($path)) {
//         echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
//         return;
//     }

//     // On peut valider le fichier et le stocker définitivement
//     move_uploaded_file($_FILES['licence']['tmp_name'], $path . basename($_FILES['licence']['name']));
//     $isFileLoaded = true;
// }

$method = $_SERVER['REQUEST_METHOD'] ?? 'POST'; // Put or Post

$id = $_POST['id'] ?? null;
$niv = $_POST['niv'] ?? null;
$ngfl = $_POST['ngfl'] ?? null;
$nvin = $_POST['nvin'] ?? null;
$brand = $_POST['brand'] ?? null;
$model = $_POST['model'] ?? null;
$color = $_POST['color'] ?? null;
$year = $_POST['year'] ?? null;
$provider = $_POST['provider'] ?? null;
$driver = $_POST['driver'] ?? null;



if ($method === 'POST' && !empty($id)) {
    // Edit
    $stmt = $pdo->prepare("UPDATE cars SET `niv` = :niv, `ngfl` = :ngfl, `nvin` = :nvin, `brand` = :brand, `model` = :model, `color` = :color, `year` = :year, `provider` = :provider, `driver` = :driver WHERE id = :id");
    $stmt->bindParam('id', $id, PDO::PARAM_INT);
    $stmt->bindParam('niv', $niv, PDO::PARAM_STR);
    $stmt->bindParam('ngfl', $ngfl, PDO::PARAM_STR);
    $stmt->bindParam('nvin', $nvin, PDO::PARAM_STR);
    $stmt->bindParam('brand', $brand, PDO::PARAM_STR);
    $stmt->bindParam('model', $model, PDO::PARAM_STR);
    $stmt->bindParam('color', $color, PDO::PARAM_STR);
    $stmt->bindParam('year', $year, PDO::PARAM_INT);
    $stmt->bindParam('provider', $provider, PDO::PARAM_INT);
    $stmt->bindParam('driver', $driver, PDO::PARAM_INT);
    $stmt->execute();
} else {
    // Insert
    $stmt = $pdo->prepare("INSERT INTO `cars` (`niv`, `ngfl`, `nvin`, `brand`, `model`, `color`, `year`, `provider`, `driver`) VALUES (:niv, :ngfl, :nvin, :brand, :model, :color, :year, :provider, :driver)");
    $stmt->bindParam('niv', $niv, PDO::PARAM_STR);
    $stmt->bindParam('ngfl', $ngfl, PDO::PARAM_STR);
    $stmt->bindParam('nvin', $nvin, PDO::PARAM_STR);
    $stmt->bindParam('brand', $brand, PDO::PARAM_STR);
    $stmt->bindParam('model', $model, PDO::PARAM_STR);
    $stmt->bindParam('color', $color, PDO::PARAM_STR);
    $stmt->bindParam('year', $year, PDO::PARAM_INT);
    $stmt->bindParam('provider', $provider, PDO::PARAM_INT);
    $stmt->bindParam('driver', $driver, PDO::PARAM_INT);
    $stmt->execute([$niv, $ngfl, $nvin, $brand, $model, $color, $year, $provider, $driver]);
    $id = $pdo->lastInsertId();
}

// Redirect to the edit page
// Assuming you have an edit.php page to edit the user details
header("Location: edit.php?id=$id");
exit();
?>