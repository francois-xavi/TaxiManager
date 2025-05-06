
<?php

require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');
$smtp = $pdo->prepare("SELECT * FROM providers WHERE id = :id");
$smtp->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$smtp->execute();
$provider = $smtp->fetch(PDO::FETCH_ASSOC);
if (!$provider) {
    header("Location: index.php?message=Fournisseur introuvable.");
    exit();
}
require_once(ROOT_PATH . '/includes/header.php');
?>
<h1 class="text-center">Modifier un fournisseur</h1>
<div class="text-center mt-4">
    <a href="index.php" class="btn btn-primary">Retour à la liste des fournisseurs</a>
</div>

<form class="row g-3 mt-4" action="submit.php" method="POST">
  <div class="col-md-4">
    <label for="name" class="form-label">Nom du fournisseur:</label>
    <input type="text" class="form-control" id="name" placeholder="Les Bagnoles" name="name" value="<?= htmlspecialchars($provider['name']); ?>" required>
  </div>
  <div class="col-md-4">
    <label for="type" class="form-label">Type de fournisseur:</label>
    <select id="type" class="form-select" name="supplier_type" required>
      <option <?= $provider['supplier_type'] === null ? 'selected' : ''; ?>>Choisir...</option>
      <option value="dealer" <?= $provider['supplier_type'] === 'dealer' ? 'selected' : ''; ?>>Concessionnaire</option>
      <option value="individual" <?= $provider['supplier_type'] === 'individual' ? 'selected' : ''; ?>>Particulier</option>
      <option value="importer" <?= $provider['supplier_type'] === 'importer' ? 'selected' : ''; ?>>Importateur</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="address" class="form-label">Adresse:</label>
    <input type="text" class="form-control" id="address" placeholder="123 Rue de la Paix" name="address" value="<?= htmlspecialchars($provider['address']); ?>" required>
  </div>
  <div class="col-md-4">
    <label for="city" class="form-label">Ville:</label>
    <input type="text" class="form-control" id="city" placeholder="Cotonou" name="city" value="<?= htmlspecialchars($provider['city']); ?>" required>
  </div>
  <div class="col-md-4">
    <label for="country" class="form-label">Pays:</label>
    <input type="text" class="form-control" id="country" placeholder="Bénin" name="country" value="<?= htmlspecialchars($provider['country']); ?>" required>
  </div>
  <div class="col-md-4">
    <label for="phone" class="form-label">Numéro de téléphone:</label>
    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+229 12345678" value="<?= htmlspecialchars($provider['phone']); ?>" >
  </div>
  <div class="col-md-4">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="John@example.com" name="email" value="<?= htmlspecialchars($provider['email']); ?>" >
  </div>
  <div class="col-md-4">
    <label for="website" class="form-label">Site web:</label>
    <input type="url" class="form-control" id="website" placeholder="www.example.com" name="website" value="<?= htmlspecialchars($provider['website']); ?>" >
  </div>
  <input type="hidden" name="id" value="<?= htmlspecialchars($provider['id']); ?>">
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Modifier</button>
  </div>
</form>
<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

