
<?php
// add.php
// This file is part of the TaxiManager project.

// Include the database connection and header
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/header.php');
require_once(ROOT_PATH . '/includes/db.php');
$stmt = $pdo->prepare("SELECT * FROM drivers");
$stmt->execute();
$drivers = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT * FROM providers");
$stmt->execute();
$providers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h1 class="text-center">Ajouter une Voiture</h1>
<form class="row g-3 mt-4" action="submit.php" method="POST">
  <div class="col-md-4">
    <label for="inputniv" class="form-label">Numero d'immatriculation du véhicule</label>
    <input type="text" class="form-control" id="inputniv" placeholder="AB123CD" name="niv" required>
  </div>
  <div class="col-md-4">
    <label for="inputngfl" class="form-label">Numero gravé dans les fenêtres latérales</label>
    <input type="text" class="form-control" id="inputngfl" placeholder="AB123CD" name="ngfl" required>   
  </div>
  <div class="col-md-4">
    <label for="inputnvin" class="form-label">Numéro de chassis / Numéro VIN</label>
    <input type="text" class="form-control" id="inputnvin" placeholder="1HGCM82633A123456" name="nvin" required>
  </div>
  <div class="col-md-3">
    <label for="inputmarque" class="form-label">Marque du véhicule:</label>
    <input type="text" class="form-control" id="inputmarque" placeholder="Toyota" name="brand">
  </div>
  <div class="col-md-3">
    <label for="inputModel" class="form-label">Modèle:</label>
    <input type="text" class="form-control" id="inputModel" placeholder="Corolla" name="model">
  </div>
  <div class="col-md-3">
    <label for="inputColor" class="form-label">Couleur:</label>
    <input type="text" class="form-control" id="inputColor" placeholder="Rouge" name="color">
  </div>
  <div class="col-md-3">
    <label for="inputYear" class="form-label">Année:</label>
    <input type="number" class="form-control" id="inputYear" name="year" min="1900" value="2023">
  </div>
  <div class="col-md-3">
    <label for="inputProvider" class="form-label">Fournisseur</label>
    <select id="inputProvider" class="form-select" name="provider">
      <option selected>Choisir...</option>
      <?php foreach ($providers as $provider): ?>
        <option value="<?= $provider['id']; ?>"><?= htmlspecialchars($provider['name']); ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputDriver" class="form-label">Chauffeur</label>
    <select id="inputDriver" class="form-select" name="driver">
      <option selected>Choisir...</option>
      <?php foreach ($drivers as $driver): ?>
        <option value="<?= $driver['id']; ?>"><?= htmlspecialchars($driver['first_name'] . ' ' . $driver['last_name']); ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
</form>


<div class="text-center mt-4">
    <a href="index.php" class="btn btn-primary">Retour à la liste des voitures</a>
</div>
<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

