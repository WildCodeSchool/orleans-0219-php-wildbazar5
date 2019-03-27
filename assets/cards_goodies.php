<?php
/**
 * Created by PhpStorm.
 * User: wilder18
 * Date: 14/03/19
 * Time: 17:46
 */

require 'connec.php';

$pictureBasePath ='../assets/img/goodies/';

$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT * FROM goodies_product";
$res = $pdo->query($query);
$goodiesproducts = $res->fetchAll(PDO::FETCH_ASSOC);

foreach ($goodiesproducts as $goodieproduct) :?>
    <!-- PRODUIT -->
    <div class="col-md-6 col-lg-4 col-xl-3">
        <article id="<?=  htmlentities($goodieproduct['id']) ?>">
            <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target=<?= "#prod" . htmlentities($goodieproduct['id'])?>>
            <div class="dr_wrapper text-center ">
                <img src="<?= $pictureBasePath. htmlentities($goodieproduct['picture']) ?>"
                     class="card-img-top img-fluid art-image"  alt="<?= htmlentities($goodieproduct['title']) ?>"
            </div>
            <div class="card-img-overlay">
                <div class="card-body text-right p-1">
                    <h3><span class="card-text badge badge-info dr_badge"><?= number_format($goodieproduct['price'],2, '.', '') ?> $</span></h3>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center"><?= htmlentities($goodieproduct['short_title']) ?></h4>
            </div>
    </article>
    </div>

    <!-- DEFINITION DE FENETRE MODALE -->
    <div class="modal fade" id=<?= 'prod'. htmlentities($goodieproduct['id']) ?> tabindex="-1" role="dialog" aria-labelledby="modalDescrProduct"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><?= htmlentities($goodieproduct['title']) ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-xs-6 col-md-4 art-img-content">
                            <img class="card-img art-img" src="<?= $pictureBasePath. htmlentities($goodieproduct['picture'])  ?>"
                            alt="<?= htmlentities($goodieproduct['title']) ?>" />
                        </div>
                        <div class=" col-xs-6 col-md-8">
                            <div class="card-body">
                                <h4><span class="art-price"></span><?= number_format(htmlentities($goodieproduct['price']) ,2, '.', '') ?> $</h4>
                                <p class="card-text art-descr"><?= htmlentities($goodieproduct['summary'])  ?></p>
                                <table class="table table-striped table-sm">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Feature</th>
                                            <td><span><?= htmlentities($goodieproduct['char_feature']);?></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Category</th>
                                            <td><span><?= htmlentities($goodieproduct['char_category']);?></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Subcategory</th>
                                            <td><span><?= htmlentities($goodieproduct['char_subcategory']);?></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Size</th>
                                            <td><span><?= htmlentities($goodieproduct['char_size']);?></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td><span><?= htmlentities($goodieproduct['char_color']);?></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Reference</th>
                                            <td><span><?= htmlentities($goodieproduct['char_reference']);?></span></td>
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