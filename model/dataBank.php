<?php
   $connection;
   
   function connect() {
        global $connection;
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $base = 'estoque_barista';
        $connection = mysqli_connect($server, $user, $password, $base) or die(mysqli_connect_error());
   }

   function query($sql) {
        global $connection;
        mysqli_query($connection, "set character set utf8");
        $query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        return $query;
   }

   function close() {
    global $connection;
    mysqli_close($connection);
   }
?>
    

