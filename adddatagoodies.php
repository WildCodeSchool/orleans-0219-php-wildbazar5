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
        $titleJumbo = "add new goodie";
        //Sous-Titre pour le jumbo
        $subTitleJumbo = "Just from geek space ...";
        //Besoin d'un bouton Add neww ? mettre true
        $addNewProductButton = false;
        // Si bouton add new indiquer la page php contenant le formulaire d'ajout
        $namePageNewProductForm = "";
        include 'header.php';
        include 'assets/dataGoodies.php';
        include 'assets/validformdatagoodies.php';
        ?>
    </div>
        <div class="container p-2">
        <!-- Section Products-->
        <section class="dr_section m-5" id="formGoodies">
            <div class="card rounded formadd">
                <div class="card-body text-white">
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" novalidate>

                        <div class="form-group">
                            <label for="idproducttitle" class="requiredinput">Product name : </label>
                            <input type="text" class="form-control" id="idproducttitle" name="productitle" placeholder="Product name" title="Fill a product name" max="255" required
                                   value=<?= $formData["productitle"] ?? ''; ?> >
                            <span class="bg-danger text-white"><?= $errors['productitle'] ?? ''; ?></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="idproductshorttitle">Card product name :</label>
                                <input type="text" class="form-control" id="idproductshorttitle" name="productshorttitle" placeholder="Product Card title"  max="100" title="Fill a card display product name"
                                       value=<?= $formData["productshorttitle"] ?? ''; ?> >
                                <span class="bg-danger text-white"><?= $errors['productshorttitle'] ?? ''; ?></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="idproductprice"  class="requiredinput">Price ($) :</label>
                                <input type="text" class="form-control" id="idproductprice" name="productprice" pattern="[0-9]*[.]?[0-9]+" placeholder="0.00 $" title="Enter a product price in $" required
                                       value=<?= $formData["productprice"] ?? ''  ?> >
                                <span class="bg-danger text-white"><?= $errors['productprice']?? ''; ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="idproductpictureurl"  class="requiredinput">Product picture URL :</label>
                            <input type="text" class="form-control" id="idproductpictureurl" name="productpictureurl" placeholder="Product picture" title="Specify an url to product picture" max="255"  required
                                   value=<?= $formData["productpictureurl"] ?? ''; ?> >
                            <span class="bg-danger text-white"><?= $errors['productpictureurl'] ?? ''; ?></span>
                        </div>
                        <div class="form-group">
                            <label  for="idproductdescr">Product description :</label>
                            <textarea  id="idproductdescr"  class="form-control" name="productdescr"  placeholder="Fill a product description ..." title="Fill a product description" ><?= $formData["productdescr"] ?? ''; ?>
                    </textarea>
                            <span class="bg-danger text-white"><?= $errors['productdescr']?? ''; ?></span>
                        </div>

                        <div class="form-group">
                            <label  for="idprodfeature"  class="requiredinput">Feature type :</label>
                            <select id="idprodfeature" name="prodfeature" class="form-control"     placeholder="Select one feature type ..." title="Select a feature type" required>
                                <option value="">Select one ...</option>
                                <?php foreach ($goodiesfeaturetypes as $goodiesfeaturetype ) : ?>
                                    <option value="<?= $goodiesfeaturetype; ?>"
                                        <?php if (isset ($formData['productcolor']) && ($formData['prodfeature'] === $goodiesfeaturetype)): ?>  selected <?php endif; ?>>
                                        <?= $goodiesfeaturetype; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <span class="bg-danger text-white"><?= $errors['prodfeature']?? ''; ?></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label  for="idprodcategory"  class="requiredinput">Category :</label>
                                <select id="idprodcategory" name="prodcategory" class="form-control"  placeholder="Select one category ..."  title="Select a category" required>
                                    <option value="">Select one ...</option>
                                    <?php foreach ($goodiescategories as $goodiescategorie ) : ?>
                                        <option value="<?= $goodiescategorie; ?>"
                                            <?php if (isset ($formData['prodcategory']) &&  ($formData['prodcategory'] === $goodiescategorie)) : ?>  selected <?php endif; ?>>
                                            <?= $goodiescategorie; ?>
                                        </option>

                                    <?php endforeach ?>
                                </select>
                                <span class="bg-danger text-white"><?= $errors['prodcategory']?? ''; ?></span>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="idprodsubcategory"  class="requiredinput">Subcategory :</label>
                                <input type="text" class="form-control" id="idprodsubcategory" name="prodsubcategory"  max="100" placeholder="Product subcategory" title="Fill a subcategory" required
                                       value=<?= $formData["prodsubcategory"] ?? ''; ?> >
                                <span class="bg-danger text-white"><?= $errors['prodsubcategory']?? ''; ?></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="idproductsize"  class="requiredinput">Size (inches) :</label>
                                <input type="text" class="form-control" id="idproductsize" name="productsize" pattern="[0-9]*[.]?[0-9]+" placeholder="0.00 inches" title="Enter a product size in inches" required
                                       value=<?= $formData["productsize"] ?? ''; ?> >
                                <span class="bg-danger text-white"><?= $errors['productsize'] ?? ''; ?></span>
                            </div>
                            <div class="form-group col-md-2">
                                <label  for="idproductcolor"  class="requiredinput">Color :</label>
                                <select id="idproductcolor" name="productcolor" class="form-control"  placeholder="Select one product color ..." title="Select a product color" required>
                                    <option value="">Select one ...</option>
                                    <?php foreach ($goodiescolors as $goodiescolor ) : ?>
                                        <option value="<?= $goodiescolor; ?>"
                                            <?php if (isset ($formData['productcolor']) &&  ($formData['productcolor'] === $goodiescolor)): ?>  selected <?php endif; ?>>
                                            <?= $goodiescolor; ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                                <span class="bg-danger text-white"><?= $errors['productcolor'] ?? '' ?></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="idprodreference"  class="requiredinput">Reference :</label>
                                <input type="text" class="form-control" id="idprodreference" name="prodreference" pattern="^[A-Z]\d{5}$" placeholder="A00000" title="Enter a product reference formatted A00000" required
                                       value=<?= $formData["prodreference"]?? ''; ?> >
                                <span class="bg-danger text-white"><?= $errors['prodreference']?? ''; ?></span>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-md-6">
                        <button type="submit" class="btn btn-lg btn-outline-light btn-block mt-3" >Submit</button>
                            </div>
                        </div>
                </div>
                </form>
                </div>
            </div>
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


