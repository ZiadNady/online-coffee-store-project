<?php
try {
    $host = 'localhost';
    $dbname = 'laravel_crud';
    $username = 'root';
    $password = '';

    // Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SELECT statement
    $stmt = $conn->prepare("SELECT * FROM products ");

    // Execute SELECT statement
    $stmt->execute();

    // Retrieve results as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output results
    foreach ($results as $row) {
        echo "{$row['id']}<br>";
    }
} catch(PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
?>
