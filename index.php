<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<title>Demo</title>
</head>
<body>

  <h1>Recomennded Books</h1>
            
        <?php 

            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langolier",
                "John Travolva",
                "Ursu polar",
                "Cine ce vrea"
            ];
        
        ?>


                <ul>
                    <?php foreach ($books as $name) : ?>

                    <li> <?= $name ?> </li>
                    <?php endforeach; ?>
                </ul>



</body>
</html>