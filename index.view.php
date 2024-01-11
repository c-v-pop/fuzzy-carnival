
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Demo</title>
</head>

<body>

    
        <h1><?= $business['name']; ?></h1>
        <?php foreach ($business['categories'] as $category) : ?>
                <li><?= $category ?></li>
        <?php endforeach; ?>

</body>
</html>