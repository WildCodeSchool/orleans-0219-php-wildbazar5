<?php

if($_POST)
{

    $errors = array() ;
    if(empty($_POST['prodTitle'])) {
        $errors['prodTitle1'] = "The prodTtile can't be empty.";
    }
    if(strlen($_POST['prodTitle']) < 2 ) {
        $errors['prodTitle2'] = "The prodTitle must be at least 2 characters long.";
    }
    if(empty($_POST['prodPrice'])) {
        $errors['prodPrice1'] = "The price can't be empty.";
    }
    if(strlen($_POST['prodPrice']) < 2 ) {
        $errors['prodPrice2'] = "The price must be at least 2 characters long.";
    }
    if(empty($_POST['prodDescr'])) {
        $errors['prodDescr1'] = "The prodDescr can't be empty.";
    }
    if(strlen($_POST['prodDescr']) < 6 ) {
        $errors['prodDescr2'] = "The prodDescr must be at least 6 characters long" ;
    }
    if(empty($_POST['prodSize'])) {
        $errors['prodSize'] = "The prodSize can't be empty.";
    }

    if(empty($_POST['prodWeight'])) {
    $errors['prodSize'] = "The prodWeight can't be empty.";
    }
    if(empty($_POST['prodReference'])) {
    $errors['prodReference1'] = "The reference can't be empty.";
    }
    if(strlen($_POST['prodReference']) < 6 ) {
        $errors['prodReference2'] = "The reference must be 6 characters long.";

    }
    if(empty($_POST['prodMaterial'])) {
        $errors['prodMaterial1'] = "Composition can't be empty.";
    }
    if(strlen($_POST['prodMaterial']) < 2) {
        $errors['prodMaterial2'] = "Material can't at least 2 characters long" ;
    }
    if(empty($_POST['prodPicture'])) {
        $errors['prodPicture1'] = "URL can't be empty.";
    }
    if(count($errors) == 0) {
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

        <select name="kitchen_product">
            <option value="mug">Mugs</option>
            <option value="ecocup">Ecocups</option>
            <option value="bowl">Bowls</option>

        </select>

        <div class="form-group">
            <label for="prodTitle">Product name</label>
            <input type="text" class="form-control" id="prodTitle" name="prodTitle" aria-describedby="textHelp" placeholder="Product name" required>
            <p><?php if(isset($errors['prodTitle1'])) echo $errors['prodTitle1']; ?></p>
            <p><?php if(isset($errors['prodTitle2'])) echo $errors['prodTitle2']; ?></p>
        </div>

        <div class="form-group">
            <label for="prodPrice">Price in $</label>
            <input type="number" class="form-control" id="prodPrice" name="prodPrice"  aria-describedby="textHelp" placeholder="Product price" required>
            <p><?php if(isset($errors['prodPrice1'])) echo $errors['prodPrice1']; ?></p>
            <p><?php if(isset($errors['prodPrice2'])) echo $errors['prodPrice2']; ?></p>
        </div>

        <div class="form-group">
            <label for="prodDescr">Product description</label>
            <input type="text" class="form-control" id="prodDescr" name="prodDescr" aria-describedby="textHelp" placeholder="Product description" required>
            <p><?php if(isset($errors['prodDescr1'])) echo $errors['prodDescr1']; ?></p>
            <p><?php if(isset($errors['prodDescr2'])) echo $errors['prodDescr2']; ?></p>
        </div>

        <div class="row">
            <div class="col">
                <label for="prodSize">Product size</label>
                <input type="number" class="form-control" id="prodSize" name="prodSize" placeholder="size in inches" required>
                <p><?php if(isset($errors['prodSize1'])) echo $errors['prodSize1']; ?></p>
            </div>
            <div class="col">
                <label for="prodWeight">Product weight</label>
                <input type="number" class="form-control" id="prodWeight" name="ProdWeight" placeholder="weight in lbs" required>
                <p><?php if(isset($errors['prodWeight1'])) echo $errors['prodWeight1']; ?></p>
            </div>
        </div>

        <div class="form-group">
            <label for="prodReference">Reference</label>
            <input type="text" class="form-control" id="prodReference" name="prodReference" aria-describedby="textHelp" placeholder="Product reference" required>
            <p><?php if(isset($errors['prodReference1'])) echo $errors['prodReference1']; ?></p>
            <p><?php if(isset($errors['prodReference2'])) echo $errors['prodReference2']; ?></p>
        </div>

        <div class="form-group">
            <label for="prodMaterial">Product composition</label>
            <input type="text" class="form-control" id="prodMaterial" name="prodMaterial" aria-describedby="textHelp" placeholder="Product composition" required>
            <p><?php if(isset($errors['prodMaterial1'])) echo $errors['prodMaterial1']; ?></p>
            <p><?php if(isset($errors['prodMaterial2'])) echo $errors['prodMaterial2']; ?></p>
        </div>

        <div class="form-group">
            <label for="prodpicture">Product image</label>
            <input type="text" class="form-control" id="prodpicture" name="prodPicture" aria-describedby="textHelp" placeholder="Product image" required>
            <p><?php if(isset($errors['prodPicture1'])) echo $errors['prodPicture1']; ?></p>
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