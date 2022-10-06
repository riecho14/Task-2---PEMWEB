<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>Ericho Aldo Firano - 120140119</h3>
        <div class="separator">
            <hr>
            <span>Input Data Product</span>
            <hr>
        </div>
        <form action="detail.php" method="GET">
            <div class="section-inputs">
            </div>
            <label for="idproduct">
                <span>ID Product</span>
                <input name="id_product" placeholder="Masukkan ID Product" />
            </label>
            <label for="namaproduct">
                <span>Nama Product</span>
                <input name="name_product" placeholder="Masukkan Nama Product" />
            </label>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>

</html>