<?php

include __DIR__ . '/../models/shop.php';

$arrayShop = [
    new Shop("Collare", "https://images.unsplash.com/photo-1546687813-3fcc1c363a07?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80", "./img/dog.jpg", "12 €", "Product", "Object"),
    new Shop("Cuccia per Gatti", "https://arcaplanet.vtexassets.com/arquivos/ids/277806-1800-1800/zolux-cuccia-gatti-louna-talpa.jpg?v=1771373816&quality=1&width=1800&height=1800", "./img/cat.jpg", "40,70 €", "Product", "Object"),
    new Shop("Palla da tennis", "https://images.unsplash.com/photo-1612502169027-5a379283f9c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80", "./img/dog.jpg", "4,99 €", "Game", "Genre: Ball"),
    new Shop("Crocchette 1kg", "https://assets.gheginonline.it/3/products/b2b/0812/0812542-B.jpg", "./img/cat.jpg", "8,49 €", "Food", "Calories: 200"),

]

?>

<main>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($arrayShop as $elem) { ?>
                <div class="col-3">
                    <div class="card h-100">
                        <div class="position-relative">
                            <img class="img-item" src="<?php echo $elem->image ?>" class="card-img-top" alt="dog">
                            <img class="img-genre rounded-circle" src="<?php echo $elem->genre_image ?>" alt="">
                        </div>
                        <div class=" card-body">
                            <h5 class="card-title"><?php echo $elem->title ?></h5>
                            <p class="card-text">Price: <?php echo $elem->price ?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <p class="card-text mb-0">Type: <?php echo $elem->type ?></p>
                            <p class="card-text mb-0"><?php echo $elem->genre ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>