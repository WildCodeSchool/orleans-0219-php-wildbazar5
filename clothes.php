<?php
require 'connec.php';

$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM clothes";
$statement = $pdo->query( $query);

$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($articles);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet" />
    <link rel="stylesheet" href="assets/stylefonts.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Wild Bazar</title>
</head>

<body>

<!----Navbar--->

<div class="container-fluid p-0">
    <?php
    //Titre pour le jumbo
    $titleJumbo = "clothes";
    //Sous-Titre pour le jumbo
    $subTitleJumbo = "T-shirt, Sweat and more.";
    //Besoin d'un bouton Add neww ? mettre true
    $addNewProductButton = true;
    // Si bouton add new indiquer la page php contenant le formulaire d'ajout
    $namePageNewProductForm = "formClothes.php";
    include 'header.php';
    ?>
</div>

<!-- CARD PRODUCT PHP-->

<section class="dr_section_color container">

    <div class="row p-2">

        <?php
        include 'assets/dataClothes.php';
        ?>


        <?php
        include 'assets/cards.php';
        ?>

    </div>


    <!-- DEFINITION DE FENETRE MODALE LEGAL MENTIONS-->
    <div class="modal fade" id="modalLegalMention" tabindex="-1" role="dialog" aria-labelledby="modalDescrProduct"
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
                                <p class="card-text art-descr">Images and data on this site are subject to
                                    copyright.</p>
                                <p class="card-text art-descr">Some images used come from proprietary website and
                                    must be used after
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
</section>
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
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!-- Script d'effet de texte de titre majeur -->
    <script src="assets/js/scroll.js"></script>

</body>

</html>