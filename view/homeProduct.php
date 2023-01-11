<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./bootstrap-5.2.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/settings.css">
      <title>Barista - página principal</title>
   </head>
   <body>
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
                     <a class="nav-link" aria-current="page" href="./createProduct.php" style=" font-size: 20px;">Adicionar cafés</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="./readProduct.php" style="font-size: 20px;">Visualizar cafés</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container-fluid-expand" style="background-color: #F0E5CF;">
         <div class="row">
            <div class="col-lg-4">
               <div class="container-fluid-expand">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="../assets/images/c1.jpg" class="d-block w-100" alt="carrousel-img1">
                        </div>
                        <div class="carousel-item">
                           <img src="../assets/images/c2.jpg" class="d-block w-100" alt="carousel-img2">
                        </div>
                        <div class="carousel-item">
                           <img src="../assets/images/c3.jpg" class="d-block w-100" alt="carousel-img3">
                        </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden"></span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden"></span>
                     </button>
                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               <h3 class="text-center py-5" style="text-decoration: underline;font-family: blackout; font-size: 60px;">Um pouco sobre nós:</h3>
               <div class="container-md-expand text-justify mt-5 py-3 px-5 ms-5" style="background-color: #F0ECE3; border-radius: 10px 0px 0px 10px; box-shadow: 10px 10px 20px #DAB88B;">
                  <p style="font-size: 25px;">
                     A baristo nasceu com a proposta de transformar a forma como os baristas e coffee lovers
                     gerenciam seus estoques de café, até porque, quem é que quer ficar sem café né?
                     Então, foi pensando nisso que eu Lucas Mendes Gonzales, CEO da Baristo, criei a mais eficiente
                     plataforma de gerenciamento de estoque de cafés da America latina. De forma que você que trabalha e vive 
                     desse grão, pode não somente aprecia-lo, como também registrar quais são seus cafés favoritos, dividi-los por tipo do grão,
                     tipo da moagem, tipo da torra e etc... Então o que esta esperando, venha se juntar com a gente nesse doce amargor.
                  </p>
               </div>
               <h4 class="px-5 py-5" style="font-family: blackout; font-size:50px">"Baristo, gerência que guarda sabor...</h4>
               <h4 class="px-5 py-5" style="font-family: blackout; font-size:55px; margin-left: 500px;">café que traz memórias!"</h4>
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