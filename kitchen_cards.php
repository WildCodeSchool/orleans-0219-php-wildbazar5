<?php

require 'connec.php';
$pdo = new PDO(DSN,USER, PASS);

$query = "SELECT * FROM kitchen";
$statement = $pdo->query($query);
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);


foreach ($articles as $article ) :?>
    <!-- PRODUIT -->
    <div class="col-md-6 col-lg-4 col-xl-3">
        <article id="<?=  $article['id'] ?>">
            <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target=<?= "#" . 'prod' . $article['id'] . 'modal'?>>
                <div class="dr_wrapper text-center ">
                    <img src="<?= "../assets/img/kitchen/" . $article['prod_picture'] ?>"
                         class="card-img-top img-fluid art-image"  alt="<?= $article['prod_short_title'] ?>"
                </div>
                <div class="card-img-overlay">
                    <div class="card-body text-right p-1">
                        <h3><span class="card-text badge badge-info dr_badge"><?= number_format($article['prod_price'],2, '.', '') ?> $</span></h3>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center"><?= $article['prod_short_title'] ?></h4>
                </div>
        </article>
    </div>

    <!-- DEFINITION DE FENETRE MODALE -->
    <div class="modal fade" id=<?= 'prod' . $article . 'modal' ?> tabindex="-1" role="dialog" aria-labelledby="modalDescrProduct"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><?= $article['prod_title'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-xs-6 col-md-4 art-img-content">
                            <img class="card-img art-img" src="<?= '../assets/img/kitchen/' . $article['prod_picture'] ?>"
                                 alt="<?= $article['prod_title'] ?>" />
                        </div>
                        <div class=" col-xs-6 col-md-8">
                            <div class="card-body">
                                <h4><span class="art-price"></span><?= number_format($article['prod_price'],2, '.', '') ?> $</h4>
                                <p class="card-text art-descr"><?= $article['prod_descr'] ?></p>
                                <table class="table table-striped table-sm">
                                    <tbody>

                                    <tr>
                                        <th scope="row">Weight</th>
                                        <td><span><?=$article['prod_characteristic_weight'] ?></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Weight</th>
                                        <td><span><?=$article['prod_characteristic_size'] ?></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Weight</th>
                                        <td><span><?=$article['prod_characteristic_material'] ?></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Weight</th>
                                        <td><span><?=$article['prod_characteristic_reference'] ?></span></td>

                                    </tr>

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
<?php endforeach; ?>