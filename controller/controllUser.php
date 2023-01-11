<?php
    include '../model/crudUser.php';

    $option = $_POST["option"];

    if(isset($_POST["option"])) {
        $option = $_POST["option"];
    } else {
        $option = $_GET["option"];
    }

    switch($option) {
        case 'register':
            registerUser($_POST["name"], sha1($_POST["password"]));
            break;
        case 'login':
            $name = $_POST["name"];
            $password = sha1($_POST["password"]);
            $searchBank = loginUser($name);
            if($searchBank["name_user"] == $name and $searchBank["password_user"] == $password) {
                session_start();
                $_SESSION['name'] = $name;
                header("Location: ../view/homeProduct.php");
            } else {
                echo "
                    <script>
                        alert('Usuário ou senha incorretos!');
                        window.location.href = '../view/loginUser.html';
                    </script>
                ";
            }
            break;
        case 'exit':
            session_start();
            session_destroy();
            echo "<script>window.location = '../view/loginUser.html'</script>";
            break;
    }
?>