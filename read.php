<?php
// Allow CORS for mobile app requests
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

// Establish database connection
$koneksi = new mysqli('localhost', 'root', '', 'db_produk');

// Check if the connection was successful
if ($koneksi->connect_error) {
    die('Connection failed: ' . $koneksi->connect_error);
}

// Query to fetch all records from tb_produk table
$query = mysqli_query($koneksi, "SELECT * FROM tb_produk");

// Check if the query was successful
if (!$query) {
    die('Query failed: ' . mysqli_error($koneksi));
}

// Fetch the data as an associative array
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

// Return the data as a JSON response
echo json_encode($data);

// Close the database connection
$koneksi->close();
?>
