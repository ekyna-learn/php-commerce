<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'includes/head.php'; ?>
</head>
<body>

<?php require 'includes/navbar.php'; ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="http://placehold.jp/540x408.png" class="card-img-top" alt="Product image">
        </div>
        <div class="col-md-6">
            <h1>[product.designation]</h1>
            <hr class="my-4">
            <p class="h5">
                <span class="badge badge-secondary">[product.brand]</span>
                <span class="badge badge-secondary">[product.category]</span>
            </p>
            <p>
                [product.description] Sed vulputate leo sit amet lorem porttitor, quis iaculis libero aliquam.
                Quisque iaculis vulputate nulla id luctus. Mauris eu libero nec neque
                condimentum vehicula ut et lorem. Nullam bibendum nisi commodo sem congue
                laoreet. Nam gravida sapien a magna commodo, ac sodales massa bibendum.
                Integer quis tortor at nulla efficitur euismod.
            </p>
            <p class="h4">
                [product.price] 499,99 €
            </p>
            <form class="my-4">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label for="inputQuantity" class="sr-only">Quantité</label>
                        <input type="number" class="form-control" id="inputQuantity" placeholder="Quantité">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container my-5">
    <p>
        [product.content] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ipsum sem, pharetra vitae rhoncus ac,
        hendrerit vel sem. Cras luctus semper dapibus. Nunc a suscipit purus. Mauris tincidunt egestas arcu.
        Vestibulum vulputate lorem sapien, vel volutpat purus rutrum ut. Pellentesque sagittis, sapien
        pellentesque euismod gravida, lacus felis auctor diam, non gravida nulla risus non nisl. Nam accumsan
        lacus id tellus pellentesque varius. Sed enim lectus, ullamcorper placerat nunc in, congue tincidunt felis.
    </p>
    <p>
        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sed rhoncus mi,
        vel ultrices mauris. Fusce ullamcorper enim ut dictum placerat. Quisque fringilla odio sapien, eget varius
        erat semper id. Morbi ipsum nisl, eleifend at imperdiet vitae, hendrerit at massa. In non orci ipsum. Donec
        non ante ex. Fusce id lectus sollicitudin, auctor erat non, auctor nulla. Integer vitae laoreet risus, non
        ullamcorper libero.
    </p>
    <p>
        Morbi in nisi nisi. Morbi congue lectus vitae justo volutpat euismod. Nunc at dapibus justo. Aliquam pharetra
        vel ligula id pharetra. Curabitur in venenatis eros, non vulputate erat. Pellentesque eu facilisis lectus.
        Aliquam porta, mi a placerat rutrum, turpis massa aliquet purus, cursus efficitur risus orci viverra tellus.
    </p>
</div>


<?php require 'includes/footer.php'; ?>

</body>
</html>
