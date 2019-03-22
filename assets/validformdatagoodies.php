<?php
/**
 * Created by PhpStorm.
 * User: nouse
 * Date: 17/03/19
 * Time: 10:22
 */

function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors=[];

    if (empty($_POST["productitle"])) {
        $errors['productitle'] = "Product title is required.";
    } else {
        $_POST["productitle"] = cleanInput($_POST["productitle"]);
    }
    if (empty($_POST["productshorttitle"])) {
        if (!empty($_POST["productitle"])) {
            $_POST['productshorttitle'] = $_POST["productitle"];
        }
    }

    if (empty($_POST["productprice"])) {
        $errors['productprice'] = "Product price is required";
    } else {
        $_POST["productprice"] = cleanInput($_POST["productprice"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*[.]?[0-9]+/",$_POST["productprice"]) ||! is_numeric($_POST["productprice"])) {
            $errors['productprice'] = "For product price, only numeric with dot is allowed.";
        }
    }
    if (empty($_POST["productpictureurl"])) {
        $errors['productpictureurl'] = "Product picture url is required.";
    } else {
        $_POST["productpictureurl"] = cleanInput($_POST["productpictureurl"]);
    }

    if (empty($_POST["productpictureurl"])) {
        $errors['productpictureurl'] = "Product picture url is required.";
    } else {
        $_POST["productdescr"] = cleanInput($_POST["productpictureurl"]);
    }

        $_POST["productdescr"] = cleanInput($_POST["productpictureurl"]);


    if (empty($_POST["prodfeature"])) {
        $errors['prodfeature'] = "Product feature is required.";
    } else {
        $_POST["prodfeature"] = cleanInput($_POST["prodfeature"]);
    }

    if (empty($_POST["prodcategory"])) {
        $errors['prodcategory'] = "Product category is required.";
    } else {
        $_POST["prodcategory"] = cleanInput($_POST["prodcategory"]);
    }

    if (empty($_POST["prodsubcategory"])) {
        $_POST['prodsubcategory'] = "Others";
    } else {
        $_POST["prodsubcategory"] = cleanInput($_POST["prodsubcategory"]);
    }

    if (empty($_POST["productsize"])) {
        $errors['productsize'] = "Product size is required.";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*[.]?[0-9]+/",$_POST["productsize"]) ||
            ! is_numeric($_POST["productsize"])) {
            $errors['productsize'] = "For product size, only numeric with dot is allowed.";
        }
    }

    if (empty($_POST["productcolor"])) {
        $errors['productcolor'] = "Product color is required.";
    } else {
        $_POST["productcolor"] = cleanInput($_POST["productcolor"]);
    }

    if (empty($_POST["prodreference"])) {
        $errors['prodreference'] = "Product reference is required.";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[A-Z]\d{5}$/",$_POST["prodreference"])) {
            $errors['prodreference'] = "For product reference, only numeric with dot is allowed.";
        }
    }


    if (count($errors) == 0) {
        header("Location: adddatagoodies_confirm.php");
        exit();
    }
}



