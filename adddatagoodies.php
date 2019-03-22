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

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" >

                <div class="form-group">
                    <label for="idproducttitle" class="requiredinput">Product name : </label>
                    <input type="text" class="form-control" id="idproducttitle" name="productitle" placeholder="Product name" title="Fill a product name" required
                           value=<?php if (isset($_POST["productitle"])) echo $_POST["productitle"]; ?> >
                    <span class="error"><?php if (isset($errors['productitle'])) echo $errors['productitle']; ?></span>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="idproductshorttitle">Card product name :</label>
                        <input type="text" class="form-control" id="idproductshorttitle" name="productshorttitle" placeholder="Product Card title" title="Fill a card display product name"
                               value=<?php if (isset($_POST["productshorttitle"])) echo $_POST["productshorttitle"]; ?> >
                        <span class="error"><?php if (isset($errors['productshorttitle'])) echo $errors['productshorttitle']; ?></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="idproductprice"  class="requiredinput">Price ($) :</label>
                        <input type="text" class="form-control" id="idproductprice" name="productprice" pattern="[0-9]*[.]?[0-9]+" placeholder="0.00 $" title="Enter a product price in $" required
                               value=<?php if (isset($_POST["productprice"])) echo $_POST["productprice"]; ?> >
                        <span class="error"><?php if (isset($errors['productprice'])) echo $errors['productprice']; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idproductpictureurl"  class="requiredinput">Product picture URL :</label>
                    <input type="text" class="form-control" id="idproductpictureurl" name="productpictureurl" placeholder="Product picture" title="Specify an url to product picture" required
                           value=<?php if (isset($_POST["productpictureurl"])) echo $_POST["productpictureurl"]; ?> >
                    <span class="error"><?php if (isset($errors['productpictureurl'])) echo $errors['productpictureurl']; ?></span>
                </div>
                <div class="form-group">
                    <label  for="idproductdescr">Product description :</label>
                    <textarea  id="idproductdescr"  class="form-control" name="productdescr"  placeholder="Fill a product description ..." title="Fill a product description" ><?php if (isset($_POST["productdescr"])) echo $_POST["productdescr"]; ?></textarea>
                    <span class="error"><?php if (isset($errors['productdescr'])) echo $errors['productdescr']; ?></span>
                </div>

                <div class="form-group">
                    <label  for="idprodfeature"  class="requiredinput">Feature type :</label>
                    <span class="error"><?php if (isset($errors['prodfeature'])) echo $errors['prodfeature']; ?></span>
                    <select id="idprodfeature" name="prodfeature" class="form-control"    placeholder="Select one feature type ..." required>
                        <?php foreach ($goodiesfeaturetypes as $goodiesfeaturetype ) : ?>
                        <option value="<?= $goodiesfeaturetype; ?>"><?= $goodiesfeaturetype; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label  for="idprodcategory"  class="requiredinput">Category :</label>
                    <span class="error"><?php if (isset($errors['prodcategory'])) echo $errors['prodcategory']; ?></span>
                    <select id="idprodcategory" name="prodcategory" class="form-control"  placeholder="Select one category ..." required>
                        <?php foreach ($goodiescategories as $goodiescategorie ) : ?>
                            <option value="<?= $goodiescategorie; ?>"><?= $goodiescategorie; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="idprodsubcategory"  class="requiredinput">Subcategory :</label>
                    <input type="text" class="form-control" id="idprodsubcategory" name="prodsubcategory" placeholder="Product subcategory" title="Fill a subcategory" required
                           value=<?php if (isset($_POST["prodsubcategory"])) echo $_POST["prodsubcategory"]; ?> >
                    <span class="error"><?php if (isset($errors['prodsubcategory'])) echo $errors['prodsubcategory']; ?></span>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="idproductsize"  class="requiredinput">Size (inches) :</label>
                        <input type="text" class="form-control" id="idproductsize" name="productsize" pattern="[0-9]*[.]?[0-9]+" placeholder="0.00 inches" title="Enter a product size in inches" required
                               value=<?php if (isset($_POST["productsize"])) echo $_POST["productsize"]; ?> >
                        <span class="error"><?php if (isset($errors['productsize'])) echo $errors['productsize']; ?></span>
                    </div>
                <div class="form-group col-md-2">
                    <label  for="idproductcolor"  class="requiredinput">Color :</label>
                    <span class="error"><?php if (isset($errors['productcolor'])) echo $errors['productcolor']; ?></span>
                    <select id="idproductcolor" name="productcolor" class="form-control"    placeholder="Select one product color ..." required>
                        <?php foreach ($goodiescolors as $goodiescolor ) : ?>
                            <option value="<?= $goodiescolor; ?>"><?= $goodiescolor; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="idprodreference"  class="requiredinput">Reference :</label>
                        <input type="text" class="form-control" id="idprodreference" name="prodreference" pattern="^[A-Z]\d{5}$" placeholder="A00000" title="Enter a product reference formatted A00000" required
                               value=<?php if (isset($_POST["prodreference"])) echo $_POST["prodreference"]; ?> >
                        <span class="error"><?php if (isset($errors['prodreference'])) echo $errors['prodreference']; ?></span>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-block mt-3" >Submit</button>
                </div>
            </form>



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


