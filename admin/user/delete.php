<!doctype html>
<html lang="fr">
<?php require '../includes/head.php'; ?>
<body>

<?php require '../includes/navbar.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require '../includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Supprimer l'utilisateur</h1>
            </div>

            <div class="alert alert-warning">
                Êtes-vous sûr de vouloir supprimer cet utilisateur ?
            </div>

            <!--<div class="alert alert-danger">
                Error
            </div>-->

            <form>
                <!-- Case à cocher de confirmation -->
                <div class="form-check my-4">
                    <input class="form-check-input" type="checkbox" value="" id="confirmCheck">
                    <label class="form-check-label" for="confirmCheck">
                        Confirmer la suppression
                    </label>
                </div>

                <!-- Bouton supprimer -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </div>
                </div>
            </form>

        </main>
    </div>
</div>

<?php require '../includes/scripts.php'; ?>

</body>
</html>
