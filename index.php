<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<title>Demo</title>
</head>
<body>

<h1>Recommended book</h1>

<?php 

$books = [
    [
        'name' =>   'Do Androids Dream of Electric Sheep',
        'author' =>   'Justin Dick',
        'link' =>   'http://website.com',
        'releaseYear' => '1723'
    ],
    [
        'name' =>  'Does Anep Eat?',
        'author' =>'Jimmy Jon',
        'link' =>'http://website.com',
        'releaseYear' => '2024'
    ],
    [
        'name' => 'Can I read aloud?',
        'author' =>'Nota Name',
        'link' =>'http://website.com',
        'releaseYear' => '1873'
    ],
    [
        'name' => 'Created name',
        'author' =>'Monkey Brain',
        'link' =>'http://website.com',
        'releaseYear' => '1923'
    ],
];

?>

<ul>
   <?php foreach ($books as $book) : ?>
        <a href="<?= $book['link']; ?>">
            <li><?= $book['name']; ?></li>
            <li><?= $book['author']; ?></li>
            <li><?= $book['releaseYear'];?></li>
        </a>
    <?php endforeach; ?>

</body>
</html>