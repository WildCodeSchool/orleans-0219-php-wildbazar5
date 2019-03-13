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
        include 'header.php';
        ?>
    </div>


        <div class="container p-0">
        <!-- Section Products-->
        <section class="dr_section">
            <?php
            include 'assets/dataGoodies.php';
            ?>
            <div class="row p-2">
                <?php foreach ($goodiesProducts as $idProduct => $prodDatas) {?>
                <!-- PRODUIT -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <article id="#<?php echo $idProduct ?>">
                        <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target=<?php echo "#" . $idProduct ?>
                             data-whatever=<?php echo $idProduct ?>
                            <div class="dr_wrapper text-center ">
                                <img src=<?php echo $prodDatas['prodPicture'] ?>
                                     class="card-img-top img-fluid art-image" alt=<?php echo $prodDatas['prodShortTitle'] ?>
                            </div>
                            <div class="card-img-overlay">
                                <div class="card-body text-right p-1">
                                    <h3><span class="card-text badge badge-info dr_badge"><?php echo $prodDatas['prodPrice'] ?> $</span></h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-center"><?php echo $prodDatas['prodShortTitle'] ?></h4>
                            </div>
                        </div>
                    </article>
                </div>

        <!-- DEFINITION DE FENETRE MODALE -->
        <div class="modal fade" id=<?php echo $idProduct ?> tabindex="-1" role="dialog" aria-labelledby="modalDescrProduct"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel"><?php echo $prodDatas['prodTitle'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-xs-6 col-md-4 art-img-content">
                                <img class="card-img art-img" src=<?php echo $prodDatas['prodPicture'] ?>
                                    alt=<?php echo $prodDatas['prodTitle'] ?> />
                            </div>
                            <div class=" col-xs-6 col-md-8">
                                <div class="card-body">
                                    <h4><span class="art-price"></span><?php echo $prodDatas['prodPrice'] ?> $</h4>
                                    <p class="card-text art-descr"><?php echo $prodDatas['prodDescr'] ?></p>
                                    <?php $productCharacteristics = $prodDatas['prodCharacteristics'] ?>
                                    <table class="table table-striped table-sm">
                                        <tbody>
                                            <?php foreach ($productCharacteristics as $characKey => $characValue) {?>
                                                <tr>
                                                    <th scope="row"><?php echo $goodiesCharactAliasName[$characKey] ?></th>
                                                    <td><span><?php echo $characValue ?></span></td>
                                                </tr>
                                            <?php }; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer row  justify-content-end p-2 m-1 text-center">
                        <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                            <button type="button" class="btn btn-danger  w-100" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-sm-6  col-md-4 col-lg-3 p-2">
                            <button type="button" class="btn btn-info w-100">+ Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }; ?>
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
<!--    <script src="assets/js/modal.js"></script>-->
    <!-- Script d'effet de texte de titre majeur -->
    <script src="assets/js/scroll.js"></script>


</body>

</html>