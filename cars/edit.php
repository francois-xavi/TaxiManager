
<?php

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
<h1 class="text-center">Modifier une Voiture</h1>

<form class="row g-3" action="submit.php" method="PUT">
  <div class="col-md-4">
    <label for="inputid" class="form-label">ID de la voiture</label>
    <input type="text" class="form-control" id="inputid" placeholder="1" name="id" required readonly>
  </div>
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
    <label for="inputModele" class="form-label">Modèle:</label>
    <input type="text" class="form-control" id="inputModele" placeholder="Corolla" name="model">
  </div>
  <div class="col-md-3">
    <label for="inputCouleur" class="form-label">Couleur:</label>
    <input type="text" class="form-control" id="inputCouleur" placeholder="Rouge" name="color">
  </div>
  <div class="col-md-3">
    <label for="inputYear" class="form-label">Année:</label>
    <input type="number" class="form-control" id="inputYear" name="year" min="1900" max="2025" value="2023">
  </div>
  <div class="col-md-3">
    <label for="inputProvider" class="form-label">Provider</label>
    <select id="inputProvider" class="form-select" name="provider">
      <option selected>Choisir...</option>
      <option value="1">Provider 1</option>
      <option value="2">Provider 2</option>
      <option value="3">Provider 3</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputDriver" class="form-label">Driver</label>
    <select id="inputDriver" class="form-select" name="driver">
      <option selected>Choisir...</option>
      <option value="1">Driver 1</option>
      <option value="2">Driver 2</option>
      <option value="3">Driver 3</option>
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
    <button type="submit" class="btn btn-primary">Modifier</button>
  </div>
</form>

<div class="text-center mt-4">
    <a href="index.php" class="btn btn-primary">Retour à la liste des voitures</a>
</div>
<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>

