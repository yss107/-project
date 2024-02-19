<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    // matrix display elements table 
<?php
    // Matrix display elements table program

    // Define the matrix
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    // Display the matrix elements in a table
    echo "<table>";
    foreach ($matrix as $row) {
        echo "<tr>";
        foreach ($row as $element) {
            echo "<td>$element</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>

    
</body>
</html>