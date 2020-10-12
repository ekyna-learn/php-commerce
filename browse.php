<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'includes/head.php'; ?>
</head>
<body>

<?php require 'includes/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <h1>Notre catalogue</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <form class="browse-filters py-4 px-4">
                <h5>Catégories</h5>
                <ul class="list-unstyled">
                    <li>
                        <label>
                            <input type="checkbox">
                            [category.title]
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox">
                            [category.title]
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox">
                            [category.title]
                        </label>
                    </li>
                </ul>

                <h5>Marques</h5>
                <ul class="list-unstyled">
                    <li>
                        <label>
                            <input type="radio">
                            [brand.title]
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio">
                            [brand.title]
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio">
                            [brand.title]
                        </label>
                    </li>
                </ul>

                <p>
                    <label>
                        Trier par
                        <select>
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
                            <option>Désignation croissante</option>
                            <option>Désignation décroissante</option>
                        </select>
                    </label>
                </p>

                <p>
                    <button type="submit" class="btn btn-secondary">
                        Appliquer
                    </button>
                </p>
            </form>
        </div>

        <div class="col-md-9 thumb-list">
            <?php
            $count = 9;
            for ($i = 0; $i < $count; $i++) {
            ?>
                <?php if (0 === $i % 3) { ?><div class="row"><?php } ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="http://placehold.jp/253x191.png" class="card-img-top" alt="Sample image">
                        <div class="card-body">
                            <h5 class="card-title">[product.designation]</h5>
                            <p class="card-text">
                                [product.description]
                            </p>
                            <p class="text-center h5">
                                [product.price] €
                            </p>
                            <p class="text-center">
                                <a href="#" class="btn btn-light">En savoir plus</a>
                                <a href="#" class="btn btn-primary">Ajouter au panier</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php if (0 === ($i + 1) % 3 || $i === $count) { ?></div><?php } ?>
            <?php } ?>

            <nav class="my-4" aria-label="Products pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </div>

</div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
