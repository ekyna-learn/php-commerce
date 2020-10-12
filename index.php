<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'includes/head.php'; ?>
</head>
<body>

<?php require 'includes/navbar.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut turpis eget mauris venenatis elementum.
        </p>
        <p>
            Duis luctus, nulla ac ultrices hendrerit, sapien mi bibendum nisl, quis luctus turpis eros ut lorem. Aliquam
            erat volutpat. Nulla tempus mauris a facilisis finibus.
        </p>
    </div>
</div>

<div class="container thumb-list">
    <div class="row">
    <?php for ($i = 0; $i < 3; $i++) { ?>
        <div class="col-md-4">
            <div class="card">
                <img src="http://placehold.jp/286x215.png" class="card-img-top" alt="Product image">
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
    <?php } ?>
    </div>
</div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
