<?php
    include '../model/crudProduct.php';

    switch($_POST["option"]) {
        case 'create':
            createProduct($_POST["nameCoffee"], $_POST["typeCoffee"], $_POST["priceCoffee"]);
            break;
        case 'update':
            updateProduct($_POST["nameCoffee"], $_POST["typeCoffee"], $_POST["priceCoffee"], $_POST["idCoffee"]);
            header("Location: ../view/readProduct.php");
            break;
        case 'delete':
            deleteProduct($_POST["idCoffee"]);
            header("Location: ../view/readProduct.php");
    }

?>