<?php
// Include database connection
require_once(__DIR__ . '/../includes/config.php');
require_once(ROOT_PATH . '/includes/db.php');

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $carId = intval($_GET['id']);

    // Prepare the SQL statement to delete the driver
    $sql = "DELETE FROM cars WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    if ($stmt) {
        $stmt->bindValue(1, $carId, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the drivers list page with a success message
            header("Location: index.php?message=vehicule supprimé avec succès.");
            exit();
        } else {
            // Handle execution error
            header("Location: index.php?message=Impossible d'executer l'opération de suppression.");
        }

        $stmt->close();
    } else {
        echo "Error: Could not prepare the delete statement.";
    }
} else {
    echo "Invalid request. No driver ID provided.";
}

// Close the database connection
$pdo->close();
?>