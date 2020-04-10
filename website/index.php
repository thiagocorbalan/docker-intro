<?php
    $result = file_get_contents("http://node-container:9001/products");
    $products = json_decode($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?=$product->name?></td>
                    <td><?=$product->price?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    
</body>
</html>