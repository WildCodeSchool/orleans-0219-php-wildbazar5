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
    <title>Wild Bazar - Slippers</title>
</head>

<body>

<!----Navbar--->

<?php

$titleJumbo = 'Add new slipper';
$subTitleJumbo = 'To infinity, and beyond !';
$addNewProductButton = false;
require 'header.php';


if (isset($_POST) && !empty($_POST)) {

    $errors= [];

    function cleanData($data) :string
    {
        $data = trim($data);
/*        $data = strip_tags($data);
        $data = htmlspecialchars($data);*/
        return $data;
    }


    foreach ($_POST as $data) {
        $data = cleanData($data);
    }

    if(empty($_POST['title']) OR strlen($_POST['title']) < 10) {
        $errors['title'] = 'Please add a title with more than 10 characters';
    }

    if(empty($_POST['short_title']) OR strlen($_POST['short_title']) < 10) {
        $errors['short_title'] = 'Please add a title with more than 10 characters';
    }

    if(empty($_POST['price'])) {
        $errors['price'] = 'Please add a price to your product';
    }

    if(empty($_POST['summary']) OR strlen($_POST['summary']) < 20) {
        $errors['summary'] = 'Please add a summary whit more than 20 characters';
    }

    if(empty($_POST['picture'])) {
        $errors['picture'] = 'Please add a picture\'s path to your product';
    }

    if(empty($_POST['size'])) {
        $errors['size'] = 'Please add a size to your product';
    }

    if(empty($_POST['color'])) {
        $errors['color'] = 'Please add a color to your product';
    }
    if(empty($_POST['reference']) OR !preg_match("/^[A-Z]\d{5}$/",$_POST['reference'])) {
        $errors['reference'] = 'Please add a reference which begin whit a letter followed by 5 numbers';
    }

    if (!$errors) {
        echo "Well done !";
    }

}
?>

<div class="container p-5" id="nawalForm">

    <form method="post" novalidate>

        <div class="row justify-content-center">

            <div class="col-6 col-md-4">
                <div class="form-group ">
                    <label for="title">Title </label>
                    <input type="text" class="form-control" id="title" aria-describedby="textHelp"
                           placeholder="Enter the title" name="title" value="<?= $_POST['title'] ?? '' ?>" required>
                    <p><?= $errors['title'] ?? '' ?></p>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="form-group ">
                    <label for="short_Title">Card title </label>
                    <input type="text" class="form-control" id="short_Title" placeholder="Enter the card title" name="short_title" value="<?= $_POST['short_title'] ?? '' ?>" required>
                    <p><?= $errors['short_title'] ?? '' ?></p>
                </div>
            </div>

            <div class="col-5 col-md-4">
                <div class="form-group ">
                    <label for="price">Price </label>
                    <input type="number" class="form-control" id="price" placeholder="0.00$" name="price" value="<?= $_POST['price'] ?? '' ?>" required>
                    <p><?= $errors['price'] ?? '' ?></p>
                </div>
            </div>

            <div class="col-12">
                 <div class="form-group ">
                    <label for="summary">Little description of the product </label>
                    <textarea class="form-control" id="summary" rows="4" name="summary" required><?= $_POST['summary'] ?? '' ?></textarea>
                </div>
                <p><?= $errors['summary'] ?? '' ?></p>

            </div>

            <div class="col-6">
            <div class="form-group">
                    <label for="picture">Picture </label>
                    <input type="text" class="form-control" id="picture" placeholder="Enter the image's path" name="picture" value="<?= $_POST['picture'] ?? '' ?>" required>
                </div>
                <p><?= $errors['picture'] ?? '' ?></p>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="size">Size </label>
                    <input type="text" class="form-control" id="size" placeholder="Enter the product's size" name="size" value="<?= $_POST['size'] ?? '' ?>" required>
                </div>
                <p><?= $errors['size'] ?? '' ?></p>
            </div>

            <div class="col-3 py-5">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="material" name="material" >
                    <label class="custom-control-label" for="material">Cotton</label>
                </div>
            </div>

            <div class="col-3 py-5">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="material2" name="material" >
                    <label class="custom-control-label" for="material2">Wool</label>
                </div>
            </div>

            <div class="col-3 py-5">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="material3" name="material" >
                    <label class="custom-control-label" for="material3">Leather</label>
                </div>
            </div>

            <div class="col-6 ">
                <div class="form-group">
                    <label for="color">Color </label>
                    <input type="text" class="form-control" id="color" placeholder="Enter the product's color" name="color" value="<?= $_POST['color'] ?? '' ?>" required>
                </div>
                <p><?= $errors['color'] ?? '' ?></p>
            </div>

            <div class="col-6 ">
                <div class="form-group">
                    <label for="reference">Reference </label>
                    <input type="text" class="form-control" id="reference" placeholder="Enter the product's reference" name="reference" value="<?= $_POST['reference'] ?? '' ?>" required>
                </div>
                <p><?= $errors['reference'] ?? '' ?></p>
            </div>

                <button type="submit" class="btn btn-primary btn-lg col-3">Submit</button>
        </div>


    </form>

</div>

<?php
require 'footer.php';
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
