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
                <h1 class="h2">Utilisateurs</h1>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>eMail</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="javascript: void(0)">
                                admin@example.org
                            </a>
                        </td>
                        <td>
                            <a href="javascript: void(0)" class="btn btn-xs btn-warning">
                                Modifier
                            </a>
                            <a href="javascript: void(0)" class="btn btn-xs btn-danger">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php require '../includes/scripts.php'; ?>

</body>
</html>
