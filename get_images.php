<?php
$rootDirectory = 'Rootfotos'; // Change this to your actual directory name

// Get all image files in the directory
$images = glob($rootDirectory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Output the list as a JSON array
header('Content-Type: application/json');
echo json_encode($images);
?>
