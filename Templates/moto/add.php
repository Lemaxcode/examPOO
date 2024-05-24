<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter une moto</h1>
    <form action="" method="post">
        <label for="brand">Marque:</label>
        <input type="text" id="brand" name="brand" required>
        <br><br>

        <label for="model">Modèle:</label>
        <input type="text" id="model" name="model" required>
        <br><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required>
        <br><br>

        <label for="price">Prix:</label>
        <input type="number" step="0.01" id="price" name="price" required>
        <br><br>

        <label for="image">Image (URL):</label>
        <input type="text" id="image" name="image">
        <br><br>

        <input type="submit" value="Ajouter la moto">
    </form>
</body>
</html>
