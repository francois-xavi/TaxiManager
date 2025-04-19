
<?php 

require_once(__DIR__ . '/includes/config.php');
require_once(ROOT_PATH . '/includes/header.php');
 ?>

<div class="container mt-5">
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
</div>

<?php 

require_once(__DIR__ . '/includes/config.php');
require_once(ROOT_PATH . '/includes/footer.php');
?>

