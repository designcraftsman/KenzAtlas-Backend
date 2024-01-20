<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kenzAtlas</title>
    <link rel="icon" href="assets/img/logo/LOGO_2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
   <!--navbar debut-->
    
   <?php include('navbar.php'); ?>

<!--navbar end-->


    <div class="container user">
        
        <form class="row mt-5 ">
            <h2 class="fw-bold fs-3 ">Informations sur le compte</h2>
            <div class="col-lg-4 col-md-3 col-12  mt-3">
                <label for="nom d-block">Nom</label>
                <input type="text" name="nom" class="p-2 w-100   d-block rounded rounded-3 border-1" placeholder="Latifa">
            </div>
            <div class="col-lg-4 col-md-3 col-12 mt-3">
                <label for="nom d-block">Prénom</label>
                <input type="text" name="nom" class="p-2 w-100   d-block rounded rounded-3 border-1" placeholder="Latifa">
            </div>
            <div class="col-lg-4 col-md-3 col-12 mt-3">
                <label for="nom d-block">Email</label>
                <input type="text" name="nom" class="p-2 w-100   d-block rounded rounded-3 border-1" placeholder="Latifa@gmail.com">
            </div>
            <div class="col-lg-6 col-md-5 col-12 mt-3">
                <label for="nom d-block">Mot de passe</label>
                <input type="password" name="nom" class="p-2 w-100   d-block rounded rounded-3 border-1" placeholder="password">
            </div>
            <div class="col-lg-6 col-md-5 col-12 mt-3">
                <label for="nom d-block">Confirmer le mot de passe</label>
                <input type="password" name="nom" class="p-2 w-100   d-block rounded rounded-3 border-1" placeholder="password">
            </div>
            <div class="col-12 mt-3"> 
                <textarea  class="col-12 p-3  mt-3" name="adress" id="adress" value="hay al azhar benroussi casablanca "placeholder ="Adresse" rows="3"></textarea>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary text-secondary btn-lg">Enregistrer les modifications</button>
            </div>
        </form>

        <hr class="border-primary border-3 mt-5">
        <div class="row mt-5 mb-5">
            <h2 class="fw-bold fs-4">Mes commandes</h2>
            <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">Numero de commande</th>
                    <th scope="col">Date</th>
                    <th scope="col">Commande</th>
                    <th scope="col">Prix</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">5563</th>
                    <td>1 janvier 2024</td>
                    <td>ghassoul,savon beldi</td>
                    <td>250dh</td>
                  </tr>
                  <tr>
                    <th scope="row">5563</th>
                    <td>1 janvier 2024</td>
                    <td>ghassoul,savon beldi</td>
                    <td>250dh</td>
                  </tr>
                  <tr>
                    <th scope="row">5563</th>
                    <td>1 janvier 2024</td>
                    <td>ghassoul,savon beldi</td>
                    <td>250dh</td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>


    <!-- footer start-->

  <!--footer start -->

  <?php include('footer.php'); ?>


<!-- footer end -->


  <script src="js/scrollReveal.js"></script>
  <script src="js/cart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  </html>