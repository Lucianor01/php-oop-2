<?php

include __DIR__ . '/../models/shop.php';

$first_item = new Shop("Collare", "https://images.unsplash.com/photo-1546687813-3fcc1c363a07?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80", "/../img/dog.jpg", "12 €", "Product", "Object");

?>

<main>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $first_item->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $first_item->title ?></h5>
                    <p class="card-text">Price: <?php echo $first_item->price ?></p>
                    <p class="card-text">Type: <?php echo $first_item->type ?></p>
                    <p class="card-text"><?php echo $first_item->genre ?></p>
                </div>
            </div>
        </div>
    </div>
</main>