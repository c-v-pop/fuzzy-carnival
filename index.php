<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<title>Demo</title>
</head>
<body>

<h1>Recomennded book</h1>

<?php 

$books = [
    [
        'name' =>   'Do Androids Dream of Electric Sheep',
        'author' =>   'Justin Dick',
        'link' =>   'http://website.com'
    ],
    [
        'name' =>  'Does Anep Eat?',
        'author' =>'Jimmy Jon',
        'link' =>'http://website.com'
    ],
    [
        'name' => 'Can I read aloud?',
        'author' =>'Nota Name',
        'link' =>'http://website.com'
    ],
    [
        'name' => 'Created name',
        'author' =>'Monkey Brain',
        'link' =>'http://website.com'
    ],
];

?>

<ul>
   <?php foreach ($books as $book) : ?>
        <a href="<?= $book['link'] ?>">
            <li><?= $book['name']; ?></li>
        </a>
    <?php endforeach; ?>

</body>
</html>