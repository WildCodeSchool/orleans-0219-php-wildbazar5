<?php
/**
 * Created by PhpStorm.
 * User: nouse
 * Date: 17/03/19
 * Time: 10:22
 */
require 'src/functionsgeneral.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors=[];

    $formData = cleanArray($_POST);

    if (empty($formData["productitle"])) {
        $errors['productitle'] = "Product title is required.";
    }

    if (empty($formData["productshorttitle"])) {
        if (!empty($formData["productitle"])) {
            $formData['productshorttitle'] = $formData["productitle"];
        }
    }

    if (empty($formData["productprice"])) {
        $errors['productprice'] = "Product price is required";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*[.]?[0-9]+/",$formData["productprice"]) || !is_numeric($formData["productprice"])) {
            $errors['productprice'] = "For product price, only numeric with dot is allowed.";
        }
    }

    if (empty($formData["productpictureurl"])) {
        $errors['productpictureurl'] = "Product picture url is required.";
    }


    if (empty($formData["prodfeature"])) {
        $errors['prodfeature'] = "Product feature is required.";
    }

    if (empty($formData["prodcategory"])) {
        $errors['prodcategory'] = "Product category is required.";
    }

    if (empty($formData["prodsubcategory"])) {
        $errors['prodsubcategory'] = "Product subcategory is required.";
    }

    if (empty($formData["productsize"])) {
        $errors['productsize'] = "Product size is required.";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*[.]?[0-9]+/",$formData["productsize"]) ||
            ! is_numeric($formData["productsize"])) {
            $errors['productsize'] = "For product size, only numeric with dot is allowed.";
        }
    }

    if (empty($formData["productcolor"])) {
        $errors['productcolor'] = "Product color is required.";
    }

    if (empty($formData["prodreference"])) {
        $errors['prodreference'] = "Product reference is required.";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[A-Z]\d{5}$/",$formData["prodreference"])) {
            $errors['prodreference'] = "For product reference, only format A00000 is allowed.";
        }
    }

    require 'connec.php';
    $pdo = new PDO(DSN, USER, PASS);


    $query = 'SELECT * FROM student WHERE lastname=:lastname LIMIT :limit;';
    $prep = $pdo->prepare($query);

    $prep->bindValue(':limit', 10, PDO::PARAM_INT);
    $prep->bindValue(':lastname','Pendragon', PDO::PARAM_STR);
    $prep->execute();

    if (count($errors) == 0) {

        require 'connec.php';
        $pdo = new PDO(DSN, USER, PASS);


        $query = "INSERT INTO goodies_product  VALUES ( NULL, :title,:short_title, :price, :summary, :picture, :char_feature, :char_category, :char_subcategory, :char_size, :char_color, :char_reference )";
        $prepquery = $pdo->prepare($query);

        $prepquery->bindValue(':title', $formData["productitle"], PDO::PARAM_STR);
        $prepquery->bindValue(':short_title', $formData["productshorttitle"], PDO::PARAM_STR);
        $prepquery->bindValue(':price', $formData["productprice"], PDO::PARAM_STR);
        $prepquery->bindValue(':summary',$formData["productdescr"], PDO::PARAM_STR);
        $prepquery->bindValue(':picture',$formData["productpictureurl"], PDO::PARAM_STR);
        $prepquery->bindValue(':char_feature',$formData["prodfeature"], PDO::PARAM_STR);
        $prepquery->bindValue(':char_category',$formData["prodcategory"], PDO::PARAM_STR);
        $prepquery->bindValue(':char_subcategory',$formData["prodsubcategory"], PDO::PARAM_STR);
        $prepquery->bindValue(':char_size',$formData["productsize"], PDO::PARAM_STR);
        $prepquery->bindValue(':char_color',$formData["productcolor"], PDO::PARAM_STR);
        $prepquery->bindValue(':char_reference',$formData["prodreference"], PDO::PARAM_STR);
        $prepquery->execute();


        header("Location: adddatagoodies_confirm.php");
        exit();
    }
}



