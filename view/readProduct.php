<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./bootstrap-5.2.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/settings.css">
      <title>Barista - página de cafés</title>
   </head>
   <body style="background-color: #F0E5CF;">
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
                     <a class="nav-link" href="./createProduct.php" style="font-size: 20px;">Adicionar cafés</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div>
      </div>
      <div class="container py-5 mt-5" style="background-color: #F0ECE3;">
         <table class="table">
         <thead>
            <th scope="col" style="color: #000000;font-size: 1.5em;">Nome</th>
            <th scope="col" style="color: #000000;font-size: 1.5em;">Tipo</th>
            <th scope="col" style="color: #000000;font-size: 1.5em;">Preço</th>
            <th scope="col" style="color: #000000;font-size: 1.5em;">Alterar</th>
            <th scope="col" style="color: #000000;font-size: 1.5em;">Deletar</th>
         </thead>
         <tbody>
            <?php
               include '../model/crudProduct.php';
               $search = searchProducts();
               foreach($search as $result) {
               echo "
               <tr>
                  <th scope='row'>$result[name_coffee]</th>
                  <td>$result[type_coffee]</td>
                  <td>$result[price_coffee]</td>
                  <td><button style='border: none; outline: none; height: 30px; width: 32%; background-color: #A68DAD; border-radius: 10px; font-size: 16px;'><a href='./updateProduct.php?idCoffee=$result[id_coffee]' style='text-decoration: none; color: #000000;'>Alterar</a></button></td>
                  <td><button style='border: none; outline: none; height: 30px; width: 32%; background-color: #A68DAD; border-radius: 10px; font-size: 16px;'><a href='./deleteProduct.php?idCoffee=$result[id_coffee]' style='text-decoration: none; color: #000000;'>Deletar</a></button></td>
               </tr>
               ";
               }
            ?>
         </tbody>
         </table>
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