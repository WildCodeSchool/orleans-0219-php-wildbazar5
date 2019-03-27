<?php

require 'connec.php';

$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT * FROM figurines_product";
$statement = $pdo->query($query);
$articles = $statement ->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST) && !empty($_POST)) {
    $errors = [];
    if (empty($_POST['prodTitle']) OR strlen($_POST['prodTitle']) < 2) {
        $errors['prodTitle'] = "The name must be greater than 1 character!";
    }
    if (empty($_POST['prodShortTitle']) OR strlen($_POST['prodShortTitle']) < 2) {
        $errors['prodShortTitle'] = "The name must be greater than 1 character!";
    }
    if (empty($_POST['prodDescr']) OR strlen($_POST['prodDescr']) < 10) {
        $errors['prodDescr'] = "The description must be greater than 9 character!";
    }
    if (empty($_POST['prodPrice']) OR !is_numeric($_POST['prodPrice'])) {
        $errors['prodPrice'] = "Only numeric allowed for price!";
    }
    if (empty($_POST['Height']) OR !is_numeric($_POST['Height'])) {
        $errors['Height'] = "Only numeric allowed for height!";
    }
    if (empty($_POST['Weight']) OR !is_numeric($_POST['Weight'])) {
        $errors['Weight'] = "Only numeric allowed for weight!";
    }
    if (empty($_POST['prodPicture']) OR strlen($_POST['prodPicture']) < 5) {
        $errors['images'] = "The URL must be greater than 5 character!";
    }
    if (empty($_POST['Ref'])) {
        $errors['Ref'] = "No empty reference allowed!";
    }
    if (empty($_POST['Color'])) {
        $errors['Color'] = "No empty Color allowed!";
    }

    if (!$errors) {
        $query = "INSERT INTO figurines_product(prodTitle, shortTitle, Ref, prodPrice, Weight, prodPicture, Height, prodDescr) VALUES (:prodTitle, :shortTitle, :Ref, :prodPrice, :Weight, :prodPicture, :Height, :prodDescr)";
        $statement = $pdo -> prepare($query);
        $statement -> bindValue(':title', $_POST['prodTitle'], PDO::PARAM_STR);
        $statement -> bindValue(':prodShortTitle', $_POST['prodShortTitle'], PDO::PARAM_STR);
        $statement -> bindValue(':Ref', $_POST['Ref'], PDO::PARAM_STR);
        $statement -> bindValue(':prodPrice', $_POST['prodPrice'], PDO::PARAM_INT);
        $statement -> bindValue(':Weight', $_POST['Weight'], PDO::PARAM_INT);
        $statement -> bindValue(':prodPicture', $_POST['prodPicture'], PDO::PARAM_STR);
        $statement -> bindValue(':Height', $_POST['Height'], PDO::PARAM_INT);
        $statement -> bindValue(':Color', $_POST['Color'], PDO::PARAM_STR);
        $statement -> bindValue(':prodDescr', $_POST['prodDescr'], PDO::PARAM_STR);
        $statement->execute();
        header("location: figurines.php");
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
            <label for="Title">Title Product</label>
            <input type="text" class="form-control" id="title" name="prodTitle"
                   value="<?= $_POST['prodTitle'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['prodTitle'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="ShortTitle">Short Title Product</label>
            <input type="text" class="form-control" id="shortitle" name="shortTitle"
                   value="<?= $_POST['prodShortTitle'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['prodShortTitle'] ?? "" ?></small>
        </div>

        <div class="form-group">
            <label for="Reference">Reference</label>
            <input type="text" class="form-control" id="ref" name="Ref"
                   value="<?= $_POST['Ref'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['Ref'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="Color">Color</label>
            <input type="text" class="form-control" id="Color" name="Color"
                   value="<?= $_POST['Color'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['Color'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="tel" class="form-control" id="price" name="prodPrice"
                   value="<?= $_POST['prodPrice'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['prodPrice'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="Poids">Poids</label>
            <input type="tel" class="form-control" id="weight" name="Weight"
                   value="<?= $_POST['Weight'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['Weight'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <input type="tel" class="form-control" id="image" name="prodPicture"
                   value="<?= $_POST['prodPicture'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['prodPicture'] ?? "" ?></small>
        </div>
        <div class="form-group">
            <label for="Hauteur">Hauteur</label>
            <input type="tel" class="form-control" id="height" name="Height"
                   value="<?= $_POST['Height'] ?? "" ?>">
            <small class="text-danger font-weight-bold"><?= $errors['Height'] ?? "" ?></small>
        </div>

       <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="description" rows="3" name="prodDescr" ></textarea>
            <small class="text-danger font-weight-bold"><?= $errors['prodDescr'] ?? "" ?></small>

        </div>


        <button type="submit" class="btn btn-primary">Créer mon article</button>
    </form>
</div>
</body>
</html>




