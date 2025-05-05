            </div>
        </main>

    </div>
<footer class="bg-dark row ">
    <div class="col text-white text-center p-3">
        
    © <?= date('Y'); ?> TaxiManager. Tous droits réservés.

    </div>
</footer>
<script >
    // Alert message for success or error
    <?php
    if (isset($_GET['message'])) {
        echo "alert('".htmlspecialchars($_GET['message'])."');";
    }
    if (isset($_GET['error'])) {
        echo '<div class="alert alert-danger text-center mt-4">'.htmlspecialchars($_GET['error']).'</div>';
    }
    ?>
</script>
<script src="<?= base_url ?>assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url ?>assets/js/sidebars.js"></script>
</body>
</html>