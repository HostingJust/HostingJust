<?php
// Retrieve the product name from the URL query parameters
$nome = $_GET['nome'];

// Create a fake database (JSON array) to simulate product information
$data = '[{"nome":"Product 1","peso":"5 kg","cliente":"Client 1"},{"nome":"Product 2","peso":"10 kg","cliente":"Client 2"},{"nome":"Product 3","peso":"8 kg","cliente":"Client 3"}]';

// Convert JSON string to PHP array
$products = json_decode($data, true);

// Search for the product in the array
$productFound = false;
foreach ($products as $product) {
    if ($product['nome'] === $nome) {
        // Product found, display product information
        $productFound = true;
        echo "<h2>Product Information</h2>";
        echo "<ul>";
        echo "<li><strong>Nome:</strong> " . $product['nome'] . "</li>";
        echo "<li><strong>Peso:</strong> " . $product['peso'] . "</li>";
        echo "<li><strong>Cliente:</strong> " . $product['cliente'] . "</li>";
        echo "</ul>";
        break;
    }
}

// If product not found, display a message
if (!$productFound) {
    echo "No product information found for the provided name: $nome";
}
?>
