<?php
    include 'dataBank.php';
    
    function registerUser($name, $password) {
        connect();
        $search = query("SELECT * FROM user WHERE name_user = '$name'");
        if(mysqli_num_rows($search) > 0) {
            echo "
                <script>
                    alert('Essa conta já  foi registrada !');
                    window.location.href = '../view/registerUser.html';
                </script>
            ";
            
        } else {
            query("INSERT INTO user(name_user, password_user) VALUES ('$name','$password')");
            header("Location: ../view/registerUser.html");
        }
        close();
    }

    function loginUser($name) {
        connect();
        $search = query("SELECT * FROM user WHERE name_user = '$name'");
        $result = mysqli_fetch_assoc($search);
        close();
        return $result;
    }

?>