<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>Ericho Aldo Firano - 120140119</h3>
        <div class="separator">
            <hr>
            <span>Detail Product</span>
            <hr>
        </div>
        <h3><?php
            if ($_GET["id_product"] == 119 && $_GET["name_product"] == "COFFE") {
                echo "<h3>ID 119 - COFFE</h3>";
                echo '<img src="src/img.jpg" />';
                echo "<h3>Rp30.000</h3>";
            } else {
                echo "<h3>PRODUCT NAME OR PRODUCT ID NOT FOUND</h3>";
                echo '<img src="src/error.png" />';
                echo "<h3>Rp0</h3>";
            } ?></h3>
    </div>
</body>

</html>