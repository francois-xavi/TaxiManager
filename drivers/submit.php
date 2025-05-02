<?php
// method_exists($_SERVER, 'REQUEST_METHOD') && $_SERVER['REQUEST_METHOD'] === 'POST' or die('Accès interdit !');
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');

$error = [];
$isFileLoaded = false;
$licenceFileName = $_POST['old_licence'] ?? null;

if (isset($_FILES['licence']) && $_FILES['licence']['error'] === UPLOAD_ERR_OK) {
    // Generate a unique name for the file to avoid overwriting
    // and move the uploaded file to the desired directory
    $licenceFileName = uniqid() . '_' . basename($_FILES['licence']['name']);
    move_uploaded_file($_FILES['licence']['tmp_name'], __DIR__ . '/uploads/' . $licenceFileName);
}

if (isset($_FILES['licence']) && $_FILES['licence']['$error'] === 0) {
    if ($_FILES['licence']['size'] > 1000000) {
        $error['licence'] = "L'envoi n'a pas pu être effectué, erreur ou image trop volumineuse";
        return;
    }

    $fileInfo = pathinfo($_FILES['licence']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png', 'pdf', 'docx'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "L'envoi n'a pas pu être effectué, l'extension {$extension} n'est pas autorisée";
        return;
    }

    $path = __DIR__ . '/uploads/';
    if (!is_dir($path)) {
        echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
        return;
    }

    // On peut valider le fichier et le stocker définitivement
    move_uploaded_file($_FILES['licence']['tmp_name'], $path . basename($_FILES['licence']['name']));
    $isFileLoaded = true;
}

$method = $_POST['_method'] ?? 'POST'; // Put or Post

$id = $_POST['id'] ?? null;
$first_name = $_POST['first_name'] ?? null;
$last_name = $_POST['last_name'] ?? null;
$birth_date = $_POST['birth_date'] ?? null;
$address = $_POST['address'] ?? null;
$city = $_POST['city'] ?? null;
$country = $_POST['country'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;
$year_experience = $_POST['year_experience'] ?? null;
$licence_type = $_POST['licence_type'] ?? null;
$licence_id = $_POST['licence_id'] ?? null;
$licence = $_FILES['licence']['name'] ?? null;
$accident = $_POST['accident'] ?? null;
$licence_expiration_date = $_POST['licence_expiration_date'] ?? null;
$accident_history = ($accident === 'yes') ? true : false;
$licence = $licenceFileName ?? null;


if ($method === 'PUT' && !empty($id)) {
    // Edit
    $stmt = $pdo->prepare("UPDATE drivers SET first_name = ?, last_name = ?, birth_date = ?, address = ?, city = ?, country = ?, email = ?, phone = ?, year_experience = ?, licence_type = ?, licence_id = ?, accident_history = ?, licence_expiration_date = ? licence= ? WHERE id = ?");
    $stmt->execute([$first_name, $last_name, $birth_date, $address, $city, $country, $email, $phone, $year_experience, $licence_type, $licence_id, $accident_history, $licence_expiration_date, $licence, $id]);
} else {
    // Insert
    $stmt = $pdo->prepare("INSERT INTO `drivers` (`first_name`, `last_name`, `birth_date`, `address`, `city`, `country`, `email`, `phone`, `year_experience`, `licence_type`, `licence_id`, `accident_history`, `licence_expiration_date`, `licence`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$first_name, $last_name, $birth_date, $address, $city, $country, $email, $phone, $year_experience, $licence_type, $licence_id, $accident_history, $licence_expiration_date, $licence]);
    $id = $pdo->lastInsertId();
}

// Redirect to the edit page
// Assuming you have an edit.php page to edit the user details
header("Location: edit.php?id=$id");
exit();
?>