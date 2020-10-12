<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'includes/head.php'; ?>
</head>
<body>

<?php require 'includes/navbar.php'; ?>

<div class="container">
    <div class="py-5 text-center">
        <h2>Votre panier</h2>
        <p class="lead">
            Saisissez vos informations ci-dessous pour valider votre commande.
        </p>
    </div>

    <hr class="mb-4">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Votre panier</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">12€</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">8€</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">5€</span>
                </li>
                <!--<li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-5€</span>
                </li>-->
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>20€</strong>
                </li>
            </ul>

            <!--<form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>-->
        </div>

        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Adresse de facturation</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Prénom</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Veuilez saisir votre prénom.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Nom</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Veuillez saisir votre nom.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Veuillez saisir votre adresse email.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Numéro et rue</label>
                    <input type="text" class="form-control" id="address" placeholder="123 rue principale" required>
                    <div class="invalid-feedback">
                        Veuillez saisir le numéro et la rue.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Complément<span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="zip">Code postal</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Veuillez saisir le code postal.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" placeholder="" required>
                        <div class="invalid-feedback">
                            Veuillez saisir la ville.
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="country">Pays</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Choisissez&hellip;</option>
                            <option>France</option>
                        </select>
                        <div class="invalid-feedback">
                            Veuillez choisir le pays.
                        </div>
                    </div>
                </div>

                <!--<hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">
                        Shipping address is the same as my billing address
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>-->

                <hr class="mb-4">

                <h4 class="mb-3">Paiement</h4>

                <!--<div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                               required>
                        <label class="custom-control-label" for="credit">Carte de crédit</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Virement / Chèque</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">PayPal</label>
                    </div>
                </div>-->

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Titulaire de la carte</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Nom complet inscrit sur la carte</small>
                        <div class="invalid-feedback">
                            Veuillez saisir le titulaire de la carte.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Numéro</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                            Veuillez saisir le numéro de la carte.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                            Veuillez saisir la date d'expiration.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                            VEuillez saisir le code de sécurité.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Valider la commande</button>
            </form>
        </div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
