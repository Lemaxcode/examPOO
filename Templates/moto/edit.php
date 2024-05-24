<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>editer une moto</h1>
    <form action="" method="post">

        <label for="brand">Marque:</label>
        <input type="text" id="brand" name="brand" value="<?php echo($moto->getBrand()) ?>" required >
        <br><br>

        <label for="model">Modèle:</label>
        <input type="text" id="model" name="model" value="<?php echo($moto->getModel()) ?>" required>
        <br><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="<?php echo($moto->getType()) ?>" required>
        <br><br>

        <label for="price">Prix:</label>
        <input type="number" step="0.01" id="price" name="price" value="<?php echo($moto->getPrice()) ?>" required>
        <br><br>

        <label for="image">Image (URL):</label>
        <input type="text" id="image" name="image" value="<?php echo($moto->getImage()) ?>" >
        <br><br>

        <input type="submit" value="editer la moto">
    </form>
</body>
</html>
