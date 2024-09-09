<?php
// Database configuration
$host = 'your_host';
$dbName = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define the table and column to update
    $tableName = 'your_table_name';
    $columnName = 'your_column_name';

    // Select all values from the column
    $query = "SELECT $columnName FROM $tableName";
    $stmt = $pdo->query($query);

    // Add all values in the column
    $sum = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $sum += (int) $row[$columnName];
    }

    // Display the sum of all values
    echo "Sum of values in column '$columnName': $sum";

    // Store the sum in a variable for further processing
    $result = $sum;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>

<?php
// Database configuration
$host = 'your_host';
$dbName = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define the table and column to update
    $tableName = 'your_table_name';
    $columnName = 'your_column_name';

    // Select all values from the column
    $query = "SELECT $columnName FROM $tableName";
    $stmt = $pdo->query($query);

    // Add all values in the column
    $sum = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $sum += (int) $row[$columnName];
    }

    // Display the sum of all values
    echo "Sum of values in column '$columnName': $sum";

    // Store the sum in a variable for further processing
    $result = $sum;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>