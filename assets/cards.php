<?php
/**
 * Created by PhpStorm.
 * User: wilder18
 * Date: 14/03/19
 * Time: 17:46
 */

foreach ($categoryProducts as $idProduct => $prodDatas) :?>
    <!-- PRODUIT -->
    <div class="col-md-6 col-lg-4 col-xl-3">
        <article id="<?=  $idProduct ?>">
            <div class="card border-dark my-4 dr_card" data-toggle="modal" data-target=<?= "#" . $idProduct . 'modal'?>>
            <div class="dr_wrapper text-center ">
                <img src="<?= $prodDatas['prodPicture'] ?>"
                     class="card-img-top img-fluid art-image"  alt="<?= $prodDatas['prodShortTitle'] ?>"
            </div>
            <div class="card-img-overlay">
                <div class="card-body text-right p-1">
                    <h3><span class="card-text badge badge-info dr_badge"><?= $prodDatas['prodPrice'] ?> $</span></h3>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center"><?= $prodDatas['prodShortTitle'] ?></h4>
            </div>
    </article>
    </div>

    <!-- DEFINITION DE FENETRE MODALE -->
    <div class="modal fade" id=<?= $idProduct . 'modal' ?> tabindex="-1" role="dialog" aria-labelledby="modalDescrProduct"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><?= $prodDatas['prodTitle'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-xs-6 col-md-4 art-img-content">
                            <img class="card-img art-img" src="<?= $prodDatas['prodPicture'] ?>"
                            alt="<?= $prodDatas['prodTitle'] ?>" />
                        </div>
                        <div class=" col-xs-6 col-md-8">
                            <div class="card-body">
                                <h4><span class="art-price"></span><?= $prodDatas['prodPrice'] ?> $</h4>
                                <p class="card-text art-descr"><?= $prodDatas['prodDescr'] ?></p>
                                <?php $productCharacteristics = $prodDatas['prodCharacteristics'] ?>
                                <table class="table table-striped table-sm">
                                    <tbody>
                                    <?php foreach ($productCharacteristics as $characKey => $characValue) :?>
                                        <tr>
                                            <th scope="row"><?= $prodCharacteristicsAlias[$characKey] ?></th>

                                        </tr>
                                    <?php endforeach; ?>
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