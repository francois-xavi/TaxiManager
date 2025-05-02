
<?php
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');
if (!isset($_GET['id'])) {
  die("ID manquant dans l'URL");
}
$driverId = (int)$_GET['id'];
require_once(ROOT_PATH . '/includes/header.php');
$stmt = $pdo->prepare("SELECT * FROM drivers WHERE id = ?");
$stmt->execute([$driverId]);
$driver = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$driver) {
    die("Chauffeur introuvable");
}
?>
<h1 class="text-center">Modifier un chauffeur</h1>
<form class="row g-3 mt-4" action="submit.php" method="POST" enctype="multipart/form-data">
  
  <div class="col-md-4">
    <label for="lastName" class="form-label">Nom: </label>
    <input type="text" class="form-control" id="lastName" placeholder="Nolan" name="last_name" value="<?= htmlspecialchars($driver['last_name']) ?>" required>   
  </div>
  <div class="col-md-4">
    <label for="firsName" class="form-label">Prénoms: </label>
    <input type="text" class="form-control" id="firstName" placeholder="John" name="first_name" value="<?= htmlspecialchars($driver['first_name']) ?>" required>
  </div>
  <div class="col-md-4">
    <label for="birthDate" class="form-label">Date de naissance:</label>
    <input type="date" class="form-control" id="birthDate" name="birth_date" value="<?= htmlspecialchars($drivers['birth_date'])?>" required>
  </div>
  <div class="col-md-4">
    <label for="address" class="form-label">Adresse:</label>
    <input type="text" class="form-control" id="Address" placeholder="Aïj, cotonou Bénin" name="address" value="<?= htmlspecialchars($driver['address']) ?>" required>
  </div>
  <div class="col-md-4">
    <label for="city" class="form-label">Ville:</label>
    <input type="text" class="form-control" id="city" placeholder="Cotonou" name="city" value="<?= htmlspecialchars($driver['city']) ?>" required>
  </div>
  <div class="col-md-4">
    <label for="country" class="form-label">Pays:</label>
    <input type="text" class="form-control" id="country" placeholder="Bénin" name="country" vallue="<?= htmlspecialchars($driver['country']) ?>" required>
  </div>
  
  <div class="col-md-4">
    <label for="email" class="form-label">Email: </label>
    <input type="email" class="form-control" id="email" placeholder="john@email.com" name="email" value="<?= htmlspecialchars($driver['email']) ?>">
  </div>
  <div class="col-md-4">
    <label for="phone" class="form-label">Numéro de téléphone:</label>
    <input type="tel" class="form-control" id="phone" name="phone"  placeholder="0151790718" value="<?= htmlspecialchars($driver['phone']) ?>" required>
  </div>
  <div class="col-md-4">
    <label for="yearExperience"class="form-label">Années d'expérience en conduite:</label>
    <input type="number" class="form-control" id="yearExperience" name="year_experience" min="0" max="50" value="<?= htmlspecialchars($driver['year_experience']) ?>">
  </div>
  <div class="col-md-4">
    <label for="licenceType" class="form-label">Type de permis:</label>
    <select id="licenceType" class="form-select" name="licence_type" required>
      <option >Choisir...</option>
      <option value="A" <?= $driver['licenceType'] === 'A' ? 'selected' : '' ?>>A</option>
      <option value="B" <?= $driver['licenceType'] === 'B' ? 'selected' : '' ?>>B</option>
      <option value="C" <?= $driver['licenceType'] === 'C' ? 'selected' : '' ?>>C</option>
      <option value="D" <?= $driver['licenceType'] === 'D' ? 'selected' : '' ?>>D</option>
      <option value="E" <?= $driver['licenceType'] === 'E' ? 'selected' : '' ?>>E</option>
      <option value="AM" <?= $driver['licenceType'] === 'AM' ? 'selected' : '' ?>>AM</option>
    </select>

  </div>
    <div class="col-md-4">
        <label for="licenceId" class="form-label">Numéro de permis:</label>
        <input type="text" class="form-control" id="licenceId" name="licence_id" placeholder="AB123456789" value="<?= htmlspecialchars($driver['licence_id']) ?>" required>
    </div>
  <div class="col-md-4">
    <label for="licenceExpirationDate" class="form-label">Date d'expiration du permis:</label>
    <input type="date" class="form-control" id="licenceExpirationDate" name="licence_expiration_date" value="<?= htmlspecialchars($driver['licence_expiration_date']) ?>" required>
  </div>
    <div class="col-md-4">
        <label for="licence" class="form-label">Permis:</label>
        <input type="file" class="form-control" id="licence" name="licence" placeholder="téleverser un fichier" required>
    </div>

  <div class="col-md-6">
    <label for="accidents">Antécédents d'accidents de la route?</label> 
    <br>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="accidentsYes" name="accidents" value="yes" <?= $driver['accidents'] === 'yes' ? 'checked' : '' ?>>
        <label class="form-check-label" for="accidentsYes">Oui</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="accidentsNo" name="accidents" value="no" <?= $driver['accidents'] === 'no' ? 'checked' : '' ?>>
        <label class="form-check-label" for="accidentsNo">Non</label>
    </div>
</div>
<input type="hidden" name="id" value="<?= $driverId ?>">

  <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Modifier</button>
  </div>
</form>



<div class="text-center mt-4">
    <a href="index.php" class="btn btn-primary">Retour à la liste des Chauffeurs</a>
</div>
<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

