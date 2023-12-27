<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
</head>
<body>

    <h1>Ajouter un nouveau produit</h1>

    <form action="process_AddProduct.php" method="post">
        <label for="productName">Nom du produit:</label>
        <input type="text" id="productName" name="productName" required><br>

        <label for="productPrice">Prix du produit:</label>
        <input type="number" id="productPrice" name="productPrice" required><br>

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <input type="submit" value="Ajouter le produit">
    </form>

</body>
</html>
