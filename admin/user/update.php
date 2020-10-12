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
                <h1 class="h2">Modifier l'utilisateur</h1>
            </div>

            <!--<div class="alert alert-danger">
                Error
            </div>-->

            <form>
                <!-- Champ email -->
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                </div>

                <!-- Champ Mot de passe -->
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>

                <!-- Bouton valider -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </div>
            </form>

        </main>
    </div>
</div>

<?php require '../includes/scripts.php'; ?>

</body>
</html>
