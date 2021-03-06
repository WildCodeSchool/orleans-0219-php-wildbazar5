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

<!----HEADER--->

<?php

$titleJumbo = 'Add new slipper';
$subTitleJumbo = 'To infinity, and beyond !';
$addNewProductButton = false;
require 'header.php';

$materials = ['Cotton', 'Wool', 'Leather', 'Polyester', 'Velvet', 'Synthetic'];

/** CLEAR DATA FUNCTION */
function cleanInput(array $input): array
{
    $cleanInput = [];
    foreach ($input as $key => $value) {
        $cleanInput[$key] = trim($value);
        $cleanInput[$key] = strip_tags($value);
    }

    return $cleanInput;
}

/** CALL THE DATABASE */
require 'src/connec.php';
$pdo = new PDO(DSN, USER, PASS);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    // Clean the $_POST data
    $data = cleanInput($_POST);


    /** VERIFICATION OF THE DATA */

    if (empty($data['title']) OR strlen($data['title']) > 255) {
        $errors['title'] = 'Please add a modal\'s title';
    }

    if (empty($data['short_title']) OR strlen($data['short_title']) > 100) {
        $errors['short_title'] = 'Please add a card\'s title';
    }

    if (empty($data['price'])) {
        $errors['price'] = 'Please add a price to your product';
    }

    if (empty($data['summary']) OR strlen($data['summary']) > 255) {
        $errors['summary'] = 'Please add a summary whit more than 20 characters';
    }

    if (empty($data['picture']) OR strlen($data['picture']) > 100) {
        $errors['picture'] = 'Please add a picture\'s path to your product';
    }

    if (empty($data['char_size']) OR strlen($data['char_size']) > 100) {
        $errors['char_size'] = 'Please add a size to your product';
    }

    if (empty($data['char_color']) OR strlen($data['char_color']) > 100) {
        $errors['char_color'] = 'Please add a color to your product';
    }
    if (empty($data['char_reference']) OR !preg_match("/^[A-Z]\d{5}$/", $data['char_reference']) OR strlen($data['char_reference']) > 100) {
        $errors['char_reference'] = 'Please add a reference which begin whit a letter followed by 5 numbers';
    }
    if (empty($data['char_material']) OR strlen($data['char_material']) > 100) {
        $errors['char_material'] = 'Please choose one of this options';
    }

    /** IF EVERYTHING IS OK -> INSERTION IN MY DATABASE */
    if (empty($errors)) {

        $query = "INSERT INTO slipper (id, title, short_title, price, summary, picture, char_size, char_material, char_color,
                                   char_reference) VALUES (NULL, :title, :short_title, :price, :summary, :picture, :char_size, :char_material, :char_color,
                                   :char_reference)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':title', $data['title'], PDO::PARAM_STR);
        $statement->bindValue(':short_title', $data['short_title'], PDO::PARAM_STR);
        $statement->bindValue(':price', $data['price']);
        $statement->bindValue(':summary', $data['summary'], PDO::PARAM_STR);
        $statement->bindValue(':picture', $data['picture'], PDO::PARAM_STR);
        $statement->bindValue(':char_size', $data['char_size'], PDO::PARAM_STR);
        $statement->bindValue(':char_material', $data['char_material'], PDO::PARAM_STR);
        $statement->bindValue(':char_color', $data['char_color'], PDO::PARAM_STR);
        $statement->bindValue(':char_reference', $data['char_reference'], PDO::PARAM_STR);

        $statement->execute();

        header('Location: slippers_confirm.php');
        exit();
    }

}
?>

<!------ FORM ---->

 <div class="container p-5" id="nawalForm">
    <div class="card rounded formadd">
        <div class="card-body text-white">
            <form method="post" action="form_slippers.php#NawalForm" novalidate>

                <div class="row justify-content-center">

                    <div class="col-6 col-md-4">
                        <div class="form-group ">
                            <label for="title">Title </label>
                            <input type="text" class="form-control" id="title" aria-describedby="textHelp"
                                   placeholder="Enter the title" name="title" value="<?= $data['title'] ?? '' ?>"
                                   maxlength="255" required>
                            <p><?= $errors['title'] ?? '' ?></p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4">
                        <div class="form-group ">
                            <label for="short_Title">Card title </label>
                            <input type="text" class="form-control" id="short_Title" placeholder="Enter the card title"
                                   name="short_title" value="<?= $data['short_title'] ?? '' ?>" maxlength="100"
                                   required>
                            <p><?= $errors['short_title'] ?? '' ?></p>
                        </div>
                    </div>

                    <div class="col-5 col-md-4">
                        <div class="form-group ">
                            <label for="price">Price </label>
                            <input type="number" step="0.01" class="form-control" id="price" placeholder="0.00$"
                                   name="price"
                                   value="<?= $data['price'] ?? '' ?>" required>
                            <p><?= $errors['price'] ?? '' ?></p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group ">
                            <label for="summary">Little description of the product </label>
                            <textarea class="form-control" id="summary" rows="4" name="summary"
                                      maxlength="255" required><?= $data['summary'] ?? '' ?></textarea>
                        </div>
                        <p><?= $errors['summary'] ?? '' ?></p>

                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="picture">Picture </label>
                            <input type="text" class="form-control" id="picture" placeholder="Enter the image's path"
                                   name="picture" value="<?= $data['picture'] ?? '' ?>" maxlength="100" required>
                        </div>
                        <p><?= $errors['picture'] ?? '' ?></p>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="size">Size </label>
                            <input type="text" class="form-control" id="size" placeholder="Enter the product's size"
                                   name="char_size"
                                   value="<?= $data['char_size'] ?? '' ?>" maxlength="100" required>
                        </div>
                        <p><?= $errors['char_size'] ?? '' ?></p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card mb-3 text-dark">
                            <div class="card-header font-weight-bold">Materials</div>
                            <div class="card-body text-center">

                                <?php foreach ($materials as $key => $material) : ?>

                                    <div class="custom-control custom-checkbox custom-control-inline py-3 pr-3">
                                        <input type="checkbox" class="custom-control-input" id="material<?= $key ?>"
                                               name="char_material" value="<?= $material ?>">
                                        <label class="custom-control-label"
                                               for="material<?= $key ?>"><?= $material ?></label>
                                    </div>

                                <?php endforeach; ?>
                                <p><?= $errors['char_material'] ?? '' ?></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <div class="form-group">
                            <label for="color">Color </label>
                            <input type="text" class="form-control" id="color" placeholder="Enter the product's color"
                                   name="char_color" value="<?= $data['char_color'] ?? '' ?>" maxlength="100" required>
                        </div>
                        <p><?= $errors['char_color'] ?? '' ?></p>
                    </div>

                    <div class="col-6 ">
                        <div class="form-group">
                            <label for="reference">Reference </label>
                            <input type="text" class="form-control" id="reference" pattern="^[A-Z]\d{5}$"
                                   title="add a reference which begin whit a letter followed by 5 numbers"
                                   placeholder="Enter the product's reference"
                                   name="char_reference" value="<?= $data['char_reference'] ?? '' ?>" maxlength="100"
                                   required>
                        </div>
                        <p><?= $errors['char_reference'] ?? '' ?></p>
                    </div>

                    <button class="btn btn-outline-light btn-lg col-4">Submit</button>
                </div>

            </form>
        </div>
    </div>
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
