<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>getall</h1>
    
    <div >

        <?php
        foreach ($motos as $moto) {
        ?>
            <div >
                
                <p><?php echo ($moto->getBrand()) ?></p>
                <p><?php echo ($moto->getModel()) ?></p>
                <p><?php echo ($moto->getType()) ?></p>
                <p><?php echo ($moto->getPrice()) ?></p>
                <p><?php echo ($moto->getImage()) ?></p>
                
            </div>
        <?php
        }
        ?>
    </div>

</div>
</body>
</html>


    
