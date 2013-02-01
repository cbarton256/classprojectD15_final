<?php
// Get the category data
$name = $_POST['name'];

// Validate inputs
if (empty($name)) {
    $error = "Invalid name data. Check and try again.";
    include('error.php');
} else {
    // If valid, add the product to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryName)
              VALUES
                 ('$name')";
    $db->exec($query);

    // Display the Category List page
    include('category_list.php');
}
?>