<?php
// Include your database connection file
require_once "../app/database/connection.php";

// Check if the keyword is provided in the POST request body
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['keyword'])) {
    $keyword = $data['keyword'];

    // Perform a database query to fetch assets matching the keyword
    $query = "SELECT * FROM assets WHERE asset_name LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    // Prepare an array to hold the results
    $assets = [];

    if ($result) {
        // Fetch matching assets
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each asset to the array
                $assets[] = $row;
            }
        }
    } else {
        // If there's an error in the database query
        $error = mysqli_error($conn);
        echo json_encode(['error' => $error]);
        exit; // Stop further execution
    }

    // Output the array as JSON
    echo json_encode($assets);
} else {
    // If the keyword is not provided, return an error message
    echo json_encode(['error' => 'Keyword not provided']);
}
?>
