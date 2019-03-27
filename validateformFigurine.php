<?php
if (isset($_POST) && !empty($_POST)) {
    $errors = [];
    if (empty($_POST['title']) OR strlen($_POST['title']) < 2) {
        $errors['title'] = "The name must be greater than 1 character!";
    }
    if (empty($_POST['description']) OR strlen($_POST['description']) < 10) {
        $errors['description'] = "The description must be greater than 9 character!";
    }
    if (empty($_POST['price']) OR !is_numeric($_POST['price'])) {
        $errors['price'] = "Only numeric allowed for price!";
    }
    if (empty($_POST['hauteur']) OR !is_numeric($_POST['hauteur'])) {
        $errors['hauteur'] = "Only numeric allowed for height!";
    }
    if (empty($_POST['poids']) OR !is_numeric($_POST['poids'])) {
        $errors['poids'] = "Only numeric allowed for weight!";
    }
    if (empty($_POST['images']) OR strlen($_POST['images']) < 5) {
        $errors['images'] = "The URL must be greater than 5 character!";
    }
    if (empty($_POST['reference'])) {
        $errors['reference'] = "No empty reference allowed!";
    }

    if (!$errors) {
        header("location: ../Figurines.php");
        exit();
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet" />
    <link rel="stylesheet" href="assets/stylefonts.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Document</title>
</head>
<body>
 <?php
    //Titre pour le jumbo
    $titleJumbo = "Figurines";
    //Sous-Titre pour le jumbo
    $subTitleJumbo = "Figurines and plushtoys";

    $addNewProductButton = false;
    include 'header.php';
    ?>


<div class="container">


    <form method="POST" action="validateformFigurine.php" >
        <div class="form-group">
            <label for="lastName">Title Product</label>
            <input type="text" class="form-control" id="lastName" name="title"
                   value="<?= $_POST['title'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['title'] ?? "" ?></small>
        </div>

        <div class="form-group">
            <label for="firstName">Reference</label>
            <input type="text" class="form-control" id="firstName" name="reference"
                   value="<?= $_POST['reference'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['reference'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Price</label>
            <input type="tel" class="form-control" id="phoneNumber" name="price"
                   value="<?= $_POST['price'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['price'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Poids</label>
            <input type="tel" class="form-control" id="phoneNumber" name="poids"
                   value="<?= $_POST['poids'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['poids'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Image</label>
            <input type="tel" class="form-control" id="phoneNumber" name="image"
                   value="<?= $_POST['image'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['image'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Hauteur</label>
            <input type="tel" class="form-control" id="phoneNumber" name="hauteur"
                   value="<?= $_POST['hauteur'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['hauteur'] ?? "" ?></small>
        </div>

       <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" ></textarea>
            <small class="text-danger font-weight-bold"><?= $errors['description'] ?? "" ?></small>

        </div>


        <button type="submit" class="btn btn-primary">Créer mon article</button>
    </form>
</div>
</body>
</html>




