<?php
    include 'dataBank.php';

    function searchProducts() {
        connect();
        $search = query("SELECT * FROM  coffees");
        close();
        $result = [];
        if($search) {
            while($cutedResult = mysqli_fetch_assoc($search)) {
                $result[] = $cutedResult;
            }
        }
        return $result;
    }

    function  createProduct($name, $type, $price) {
        connect();
        $search = query("SELECT * FROM coffees WHERE name_coffee = '$name'");
        if(mysqli_num_rows($search) > 0) {
            echo "
                <script>
                    alert('Esse café já consta no catálogo');
                    window.location.href = '../view/homeProduct.php';
                </script>
            ";
        } else {
            query("INSERT INTO coffees(name_coffee, type_coffee, price_coffee) VALUES ('$name','$type','$price')");
            echo "
                <script>
                    alert('Café adicionado com sucesso ao catálogo !');
                    window.location.href = '../view/readProduct.php';
                </script>
            ";
        }
        close();
    }

    function searchUpdateProduct($id) {
        connect();
        $search = query("SELECT * FROM coffees WHERE id_coffee = '$id'");
        close();
        $result = mysqli_fetch_assoc($search);
        return $result;
    }

    function updateProduct($name, $type, $price, $id) {
        connect();
        query("UPDATE coffees SET name_coffee = '$name', type_coffee = '$type', price_coffee = '$price' WHERE id_coffee = '$id'");
        close();
    }

    function deleteProduct($id) {
        connect();
        query("DELETE FROM coffees WHERE id_coffee = '$id'");
        close();
    }
?>