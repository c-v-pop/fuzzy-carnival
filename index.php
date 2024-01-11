<?php 

$business = [
    'name' => 'Laracasts',
    'cost' => 15,
    'categories' => ["Testing","PHP","Javascript"]
];

function register($user) {
    // Create user record in db.
    // Log in.
    // Send welcome email.
    // Redirect to dashboard.
}

foreach ($business['categories'] as $category) {
    echo $category;
}

require "index.view.php";