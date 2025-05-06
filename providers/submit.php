<?php
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');

$error = [];
$method = $_SERVER['REQUEST_METHOD'] ?? 'POST'; // Put or Post
$id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? null;
$address = $_POST['address'] ?? null;
$city = $_POST['city'] ?? null;
$country = $_POST['country'] ?? null;
$supplier_type = $_POST['supplier_type'] ?? null;
$phone = $_POST['phone'] ?? null;
$email = $_POST['email'] ?? null;
$website = $_POST['website'] ?? null;

// Validate inputs
if ($method === 'POST' && !empty($id)) {
    // Edit
    $stmt = $pdo->prepare("UPDATE providers SET `name` = :name, `address` = :address, `city` = :city, `country` = :country, `supplier_type` = :supplier_type, `phone` = :phone, `email` = :email, `website` = :website WHERE id = :id");
    $stmt->bindParam('id', $id, PDO::PARAM_INT);
    $stmt->bindParam('name', $name, PDO::PARAM_STR);
    $stmt->bindParam('address', $address, PDO::PARAM_STR);
    $stmt->bindParam('city', $city, PDO::PARAM_STR);
    $stmt->bindParam('country', $country, PDO::PARAM_STR);
    $stmt->bindParam('supplier_type', $supplier_type, PDO::PARAM_STR);
    $stmt->bindParam('phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam('email', $email, PDO::PARAM_STR);
    $stmt->bindParam('website', $website, PDO::PARAM_STR);
    $stmt->execute();
} else {
    // Add
    $stmt = $pdo->prepare("INSERT INTO providers (`name`, `address`, `city`, `country`, `supplier_type`, `phone`, `email`, `website`) VALUES (:name, :address, :city, :country, :supplier_type, :phone, :email, :website)");
    // Bind parameters
    $stmt->bindParam('name', $name, PDO::PARAM_STR);
    $stmt->bindParam('address', $address, PDO::PARAM_STR);
    $stmt->bindParam('city', $city, PDO::PARAM_STR);
    $stmt->bindParam('country', $country, PDO::PARAM_STR);
    $stmt->bindParam('supplier_type', $supplier_type, PDO::PARAM_STR);
    $stmt->bindParam('phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam('email', $email, PDO::PARAM_STR);
    $stmt->bindParam('website', $website, PDO::PARAM_STR);
    $stmt->execute();
    $id = $pdo->lastInsertId();
}
// Redirect to the edit page
// Assuming you have an edit.php page to edit the user details
header("Location: edit.php?id=$id");
exit();
?>