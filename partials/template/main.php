<?php
    include __DIR__ . '/../../Database/db.php';
?>

<main>
    <div class="container">
        <h1 class="text-white">Products</h1>
        <div class="row">
            <?php foreach($products as $product) : ?>
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-img-top d-flex justify-content-center">
                            <img class="w-75" src="<?= $product->image ?>" alt="<?= $product->title ?>">
                        
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3><?= $product->title ?></h3>
                            <div class="d-flex flex-column"><?= $product->getInfo() ?></div>    
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>