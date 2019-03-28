<?php

require 'connec.php';
$pdo = new PDO(DSN,USER, PASS);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$query = "SELECT * FROM reference_kitchen";
$statement = $pdo->query($query);
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] ==='POST') {
    $errors = [];

    if(empty($_POST['prod_title'])) {
        $errors['prod_title'] = "The prodTtile can't be empty.";
    }

    if(empty($_POST['prod_price'])) {
        $errors['prod_price'] = "The price can't be empty.";
    }

    if(empty($_POST['prod_descr'])) {
        $errors['prod_descr'] = "The prodDescr can't be empty.";
    }

    if(empty($_POST['prod_characteristic_size'])) {
        $errors['prod_characteristic_size'] = "The size can't be empty.";
    }

    if(empty($_POST['prod_characteristic_weight'])) {
        $errors['prod_characteristic_weight'] = "The weight can't be empty.";
    }
    if(empty($_POST['prod_characteristic_reference'])) {
        $errors['prod_characteristic_reference'] = "The reference can't be empty.";
    }

    if(empty($_POST['prod_characteristic_material'])) {
        $errors['prod_characteristic_aterial'] = "Composition can't be empty.";
    }

    if(empty($_POST['prod_picture'])) {
        $errors['prod_picture'] = "URL can't be empty.";
    }
    if(empty($errors)) {
        $query = "INSERT INTO reference_kitchen (id, prod_short_title, prod_title, prod_price, prod_descr, prod_picture, 
        prod_characteristic_weight, prod_characteristic_size, prod_characteristic_material, 
        prod_characteristic_reference) VALUES (:id, :prod_short_title, :prod_title, :prod_price, :prod_descr, 
        :prod_picture, :prod_characteristic_weight, :prod_characteristic_size, :prod_characteristic_material,
        :prod_characteristic_reference)";

        $statement = $pdo->prepare($query);
        $statement->bindvalue(':prod_short_title', $_POST['prod_short_title'], PDO ::PARAM_STR);
        $statement->bindValue(':prod_title', $_POST['prod_title'], PDO ::PARAM_STR);
        $statement->bindValue(':prod_price', $_POST['prod_price'], PDO :: PARAM_STR);
        $statement->bindValue(':prod_descr', $_POST['prod_descr'], PDO ::PARAM_STR);
        $statement->bindValue(':prod_picture', $_POST['prod_pricture'], PDO :: PARAM_STR);
        $statement->bindValue(':prod_characteristic_weight', $_POST['prod_characteristic_weight'], PDO :: PARAM_STR);
        $statement->bindValue(':prod_characteristic_size', $_POST['prod_characteristic_size'], PDO :: PARAM_STR);
        $statement->bindValue(':prod_characteristic_material', $_POST['prod_characteristic_material'], PDO :: PARAM_STR);
        $statement->bindValue(':prod_characteristic_reference', $_POST['prod_characteristic_reference'], PDO :: PARAM_STR);
        $statement->execute();
        header("form_kitchen.php") ;
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/stylefonts.css"/>
    <link rel="stylesheet" href="assets/style.css"/>
    <title>Wild Bazar</title>
</head>

<body>

<div class="container-fluid p-0">
    <?php
    //Titre pour le jumbo
    $titleJumbo = "KITCHEN";
    //Sous-Titre pour le jumbo
    $subTitleJumbo = "Mugs, Ecocups, Bowls ....";
    //Besoin d'un bouton Add neww ? mettre true
    $addNewProductButton = true;
    // Si bouton add new indiquer la page php contenant le formulaire d'ajout
    include 'header.php';
    ?>
</div>

<div class="container p-0">

    <!--formulaire-->

    <div class="container-fluid p-0">
        <form action="form_kitchen.php" method="POST">

            <div class="form-group">
                <label for="prodd_title">Product name</label>
                <input type="text" class="form-control" id="prod_title" name="prod_title" value="<?= $_POST['prod_title'] ?? "" ?>" aria-describedby="textHelp" placeholder="Product name" required>
                <p><?= $errors['prod_title'] ?? "" ?></p>
            </div>

            <div class="form-group">
                <label for="prod_price">Price in $</label>
                <input type="number" class="form-control" id="prod_price" name="prod_price"  value="<?= $_POST['prod_price'] ?? "" ?>"  aria-describedby="textHelp" placeholder="Product price" required>
                <p><?= $errors['prod_price'] ?? "" ?></p>
            </div>

            <div class="form-group">
                <label for="prod_descr">Product description</label>
                <input type="text" class="form-control" id="prod_descr" name="prod_descr" value="<?= $POST_['prod_descr'] ?? "" ?>" aria-describedby="textHelp" placeholder="Product description" required>
                <p><?= $errors['prod_descr'] ?? "" ?></p>
            </div>

            <div class="row">
                <div class="col">
                    <label for="prod_characteristic_size">Product size</label>
                    <input type="number" class="form-control" id="prod_characteristic_size" name="prod_characteristic_size" value="<?= $_POST['prod_characteristic_size'] ?? "" ?>"  placeholder="size in inches" required>
                    <p><?= $errors['prod_characteristic_size'] ?? "" ?></p>
                </div>
                <div class="col">
                    <label for="prod_characteristic_weight">Product weight</label>
                    <input type="number" class="form-control" id="prod_characteristic_weight" name="prod_characteristic_weight" value="<?= $_POST['prod_characteristic_weight'] ?? "" ?>"  placeholder="weight in lbs" required>
                    <p><?= $errors['prod_characteristic_weight'] ?? "" ?></p>
                </div>
            </div>

            <div class="form-group">
                <label for="prod_characteristic_reference">Reference</label>
                <input type="text" class="form-control" id="prod_characteristic_reference" name="prod_characteristic_reference" value="<?= $_POST['prod_characteristic_reference'] ?? "" ?>"  aria-describedby="textHelp" placeholder="Product reference" required>
                <p><?= $errors['prod_characteristic_reference'] ?? "" ?></p>
            </div>

            <div class="form-group">
                <label for="prod_characteristic_material">Product composition</label>
                <input type="text" class="form-control" id="prod_characteristic_material" name="prod_characteristic_material" value="<?= $_POST['prod_characteristic_material'] ?? "" ?>"  aria-describedby="textHelp" placeholder="Product composition" required>
                <p><?= $errors['prod_characteristic_material'] ?? "" ?></p>
            </div>

            <div class="form-group">
                <label for="prod_picture">Product image</label>
                <input type="text" class="form-control" id="prod_picture" name="prod_picture" value="<?=$_POST['prod_picture'] ?? "" ?>"  aria-describedby="textHelp" placeholder="Product image" required>
                <p><?= $errors['prod_picture'] ?? "" ?></p>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- DEFINITION DE FENETRE MODALE LEGAL MENTIONS-->
<div class="modal fade" id="modalLegalMention" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Legal Mentions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-xs-6 col-md-4 art-img-content">
                        <img class="card-img" src="assets/img/logo/yoshi.png" alt="Card image"/>
                    </div>
                    <div class=" col-xs-6 col-md-8">
                        <div class="card-body wildbazar-titlemodal">
                            <h2>WILD BAZAR</h2>
                            <p class="card-text art-descr">Images and data on this site are subject to copyright.
                            </p>
                            <p class="card-text art-descr">Some images used come from proprietary website and must
                                be used after
                                acceptance of the owner.</p>
                            <h3>© Yoshi Corporate - Wild Code Scool 2019</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer row  justify-content-end p-2 m-1 text-center">
                <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                    <button type="button" class="btn btn-danger  w-100" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
include "footer.php";
?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!-- <script src="assets/js/modal.js"></script>-->
<!-- Script d'effet de texte de titre majeur -->
<script src="assets/js/scroll.js"></script>
</body>

</html>