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
<div class="container-fluid p-0">

    <?php
    //Titre pour le jumbo
    $titleJumbo = "goodies";
    //Sous-Titre pour le jumbo
    $subTitleJumbo = "Add successfully !";
    //Besoin d'un bouton Add neww ? mettre true
    $addNewProductButton = false;
    // Si bouton add new indiquer la page php contenant le formulaire d'ajout
    $namePageNewProductForm = "";
    include 'header.php';
    ?>
</div>

<div class="container p-5">
    <!-- Section Products-->
    <section class="dr_section m-5" id="formGoodies">
        <div class="row justify-content-center my-5">
            <div class="text-center">
                <h2>new goodie is added successfully.</h2>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <a class="btn btn-lg btn-outline-primary" href="goodies.php" role="button">Back to Goodies Features</a>
        </div>
    </section>
</div>

<?php
include 'footer.php';
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