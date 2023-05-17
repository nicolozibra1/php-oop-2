<?php
    include __DIR__ . '/../../Database/db.php';
?>

<main>
    <div class="w-100 hero d-flex justify-content-end">
        <h1><span class="highlighter">Scopri</span> un mondo di <br>
         Amore e Cura <br>
         per i tuoi Amici <br>
         a <span class="highlighter">quattro zampe!</span></h1>
        <div class="box-hero">
            <img src="./img/cat-dog-hero.jpg" alt="">
        </div>
    </div>
    <section class="all-products mt-4">
        <div class="section-title d-flex align-items-center">
            <div class="hr"></div>
            <h2>Tutti i Prodotti</h2>
            <div class="hr"></div>
        </div>
        <div class="box-product">
            <div class="container">
                <h3 class="list-title">Cibo e Croccantini</h3>
                <div class="row">
                    <?php foreach($products as $product) : ?>
                        <div class="col-3">
                            <div class="card mb-4">
                                <span class="icon"><?= $product->getIcon() ?></span>
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
        </div>
    </section>
    
</main>