<?php
// Include the necessary files
include_once '../../path.php'; // Assuming this defines BASE_URL
include_once BASE_URL . '/app/database/connection.php';

// Check if ID is provided in the URL
if(isset($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Construct the SQL query
    $d_sql = "DELETE FROM assets WHERE asset_id='$id'";

    // Execute the query
    if (mysqli_query($conn, $d_sql)) {
        // Check if the previous page was an asset view page
        if (strpos($_SERVER['HTTP_REFERER'], 'asset/view') !== false) {
            // If so, go back to the previous page before that
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            // Otherwise, go back one page
            header('Location: ' . BASE_URL);
        }
        exit;
    } else {
        // Handle errors if any
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Handle the case when id is not set in the URL
    // echo "ID not provided.";
}
?>
