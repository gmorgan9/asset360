<?php
// Assuming $off_asset_tag_no contains the current asset tag
$assetTag = $_GET['asset_tag']; // Assuming the asset tag is passed as a query parameter

// Construct the JQL query string dynamically
$jqlQuery = "project=SG+AND+summary~\"" . $assetTag . "\"";
$fields = "summary"; // Define the fields you want to retrieve

// Construct the URL for the Jira API endpoint
$url = "https://garrett-morgan.atlassian.net/rest/api/3/search?jql=" . $jqlQuery . "&fields=" . $fields;

// Display the endpoint being used
echo "<p>Endpoint: " . $url . "</p>";

// Make a request to the Jira API endpoint
$response = file_get_contents($url);

// Check if the request was successful
if ($response === false) {
    // Handle the error
    echo "<p>Failed to fetch data from Jira API</p>";
} else {
    // Return the response data to the client
    echo $response;
}
?>
