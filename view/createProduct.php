<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./bootstrap-5.2.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/settings.css">
      <title>Barista - adiconar cafés ao catálogo</title>
   </head>
   <body style="background-color: #F0E5CF;">
      <?php
        session_start();
         if(isset($_SESSION['name'])) {
            "<script>console.log('true')</script>";
         } else {
            "<script>console.log('false')</script>";
            header("Location: ../view/loginUser.html");
         }
      ?>
      <nav class="navbar navbar-expand-lg fixed-header" style="background-color: #A68DAD">
         <div class="container-fluid" style="background-color: #A68DAD">
            <h1 class="navbar-brand" style="font-family: blackout; font-size:70px">Barista</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="./homeProduct.php" style=" font-size: 20px;">Página principal</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="./readProduct.php" style="font-size: 20px;">Visualizar cafés</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="form my-4 mx-5">
         <div class="container py-5 px-5 mt-5" style="background-color: #F0ECE3;">
            <div class="row gx-0">
               <div class="col-lg-8">
                  <h2 class="py-3 mb-4" style="font-family: 'blackout'; font-size: 3.2em;">Cadastre um café e lembre-se dele depois!</h2>
                  <form action="../controller/controllProduct.php" method="post">
                     <div class="form-row">
                        <div class="col-lg-6">
                           <input type="text" id="nameCoffee" name="nameCoffee" placeholder="Nome do café" class="form-control my-3 p-2">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-lg-6">
                           <input type="text" id="typeCoffee" name="typeCoffee" placeholder="Tipo do café" class="form-control my-3 p-2">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-lg-6">
                           <input type="text" id="priceCoffee" name="priceCoffee" placeholder="Preço do café" class="form-control my-3 p-2">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-lg-6"> 
                           <button type="submit" name="option" value="create" class="mt-2 mb-3 p-2" style="border: none; background-color:#A68DAD; font-size:1.2em; border-radius:10px; outline: none;">Adicionar café</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-lg-4">
                  <img src="../assets/images/createCoffee.png" alt="create-coffee-img" class="mt-5 py-5 pe-5" style="width: 100%;">
               </div>
            </div>
         </div>
      </div>
      <div class="footer">
         <footer class="text-center fixed-bottom" style="background-color: #DAB88B;">
            <div class="container p-4 pb-0">
               <section>
                  <p class="d-flex justify-content-center align-items-center">
                     <span class="me-3">Clique aqui para  encerrar a sessão!</span>
                     <button type="button" href="#" class="btn1" style="border: none; outline: none; height: 30px; width: 10%; background-color: #A68DAD; border-radius: 10px; font-size: 16px;">
                        <a href="../controller/controllUser.php?option=exit" style="color: #000000; text-decoration: none;">Sair</a>
                     </button>
                  </p>
               </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
               © 2020 Copyright:
               <a class="text-dark" href="#">Barista.com.br</a>
            </div>
         </footer>
      </div>
      <script src="./bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
   </body>
</html>