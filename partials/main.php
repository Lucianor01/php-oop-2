<?php

require_once __DIR__ . '/../models/Product.php';

require_once __DIR__ . '/../models/Category.php';

require_once __DIR__ . '/../models/Food.php';

require_once __DIR__ . '/../models/Game.php';

$dogs = new Category('Dogs', 'fa-solid fa-dog');
$cats = new Category('Cats', 'fa-solid fa-cat');
$birds = new Category('Birds', 'fa-solid fa-crow');

// var_dump($dogs);

// $product = new Product('Collare', 12, 'https://images.unsplash.com/photo-1581794236300-acd130bf0035?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80', $dogs);

// var_dump($product);

// $food = new Food('Crocchette 1kg', 9, 'https://images.unsplash.com/photo-1581794236300-acd130bf0035?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80', $dogs);
// $food->setCalories(300);

// var_dump($food);

// $game = new Game('Palla da Tennis', 20, 'https://images.unsplash.com/photo-1581794236300-acd130bf0035?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80', $dogs);
// $game->setGenre(300);

// var_dump($game);

$arrayProdotti = [
    new Product('Collare', 12, 'https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $dogs),
    new Food('Crocchette 1kg', 9, 'https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $dogs),
    new Food('Tonno in scatola', 11, 'https://images.unsplash.com/photo-1519052537078-e6302a4968d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $cats),
    new Food('Erba Gatta', 14, 'https://images.unsplash.com/photo-1519052537078-e6302a4968d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $cats),
    new Game('Palla da Tennis', 20, 'https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $dogs),
    new Game('Altalena ad Arco per Uccelli', 5, 'https://images.unsplash.com/photo-1480044965905-02098d419e96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $birds),
    new Product('Cuccia per Gatti', 8, 'https://images.unsplash.com/photo-1519052537078-e6302a4968d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $cats),
    new Product('Gabbia per Uccelli', 28, 'https://images.unsplash.com/photo-1480044965905-02098d419e96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $birds),
    new Product('Nido in legno', 7, 'https://images.unsplash.com/photo-1480044965905-02098d419e96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', $birds)

];

// var_dump($arrayProdotti);

?>

<main>

    <div class="container mt-4">
        <div class="row row-gap-4">
            <?php foreach ($arrayProdotti as $elem) : ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $elem->image ?>" class="card-img-top" alt="<?= $elem->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $elem->name ?></h5>
                            <p class="card-text mb-2">Price: <?= $elem->price . '€' ?> </p>
                            <span class="card-text mb-2 d-inline-block">Category: <?= $elem->category->name ?> </span>
                            <span><?= $elem->getCategoryIcon() ?></span>
                            <div>
                                <?= $elem->getClassName() ?>

                                <?php if ($elem->getClassName() === 'Food') : ?>
                                    <?php try {
                                        $elem->setCalories(301);
                                        echo "Le calorie sono: " . $elem->getCalories();
                                    } catch (Exception $e) {
                                        // var_dump($e);
                                        echo  $e->getMessage();
                                    } ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</main>