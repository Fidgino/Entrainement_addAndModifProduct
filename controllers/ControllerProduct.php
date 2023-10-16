<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productCategory = $_POST["productCategory"];
    $productSocialClass = $_POST["productSocialClass"];
    $productName = $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $productPrice = $_POST["productPrice"];
    
    $targetDirectory = "../assets/img/";
    $targetFile = $targetDirectory . basename($_FILES["productImg"]["name"]);
    
    if (!move_uploaded_file($_FILES["productImg"]["tmp_name"], $targetFile)) {
        var_dump("Echec lors de l'upload de l'image.");
    }

    echo "Catégorie du produit : " . $productCategory . "<br>";
    echo "Classe sociale du produit : " . $productSocialClass . "<br>";
    echo "Nom du produit : " . $productName . "<br>";
    echo "Description du produit : " . $productDescription . "<br>";
    echo "Prix du produit : " . $productPrice . "<br>";
    echo "Chemin de l'image téléchargée : " . $targetFile . "<br>";
}
?>
