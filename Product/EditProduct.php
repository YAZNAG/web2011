<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Produit</title>
</head>
<body>

    <h1>Modifier un produit</h1>

    <form action="process_EditProduct.php" method="post">
        <label for="editedProductName">Nouveau nom du produit:</label>
        <input type="text" id="editedProductName" name="editedProductName" required><br>

        <label for="editedProductPrice">Nouveau prix du produit:</label>
        <input type="number" id="editedProductPrice" name="editedProductPrice" required><br>

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <input type="submit" value="Enregistrer les modifications">
    </form>

</body>
</html>
