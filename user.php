<?php session_start(); ?>
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
            <h2 class="text-center fs-2 fw-semibold mt-5">Bienvenue <?php echo($_SESSION['prenomUtulisateur']); ?></h2>
            <h2 class="fw-light fs-6 text-center w-75 mt-4 m-auto ">Gérez vos informations, ainsi que la confidentialité et la sécurité de vos données pour profiter au mieux des services KenzAtlas.</h2>
            <hr class="border-primary border-3 ">
        <form class="row mt-5 ">
        <h3 class="fw-light fs-5  "><i class="fa-solid fa-user "></i> Informations Personnelles</h3>
            <div class="col-lg-6 col-md-3 col-12  mt-3">
                <label for="nom d-block">Nom</label>
                <input type="text" name="nom" class="p-2 w-100 form-control mt-2  d-block rounded rounded-3 border-1" placeholder="<?php echo($_SESSION['prenomUtulisateur']); ?>">
            </div>
            <div class="col-lg-6 col-md-3 col-12 mt-3">
                <label for="nom d-block">Prénom</label>
                <input type="text" name="nom" class="p-2 w-100 form-control mt-2 d-block rounded rounded-3 border-1" placeholder="<?php echo($_SESSION['nomUtulisateur']); ?>">
            </div>
            <div class="col-lg-6 col-md-3 col-12 mt-3">
                <label for="nom d-block">Date de naissance</label>
                <input type="date" name="nom" class="p-2 w-100 form-control mt-2 d-block rounded rounded-3 border-1" >
            </div>
            <div class="col-lg-6 col-md-3 col-12 mt-3">
                <label for="nom d-block">Telephone</label>
                <input type="text" name="nom" class="p-2 w-100 form-control mt-2 d-block rounded rounded-3 border-1" placeholder="+212 654 321 123"> 
            </div>
            <div class="col-lg-6 col-md-3 col-12 mt-3">
                <label for="nom d-block">Adresse email</label>
                <input type="text" name="nom" class="p-2 w-100 form-control mt-2  d-block rounded rounded-3 border-1" placeholder="<?php echo($_SESSION['emailUtulisateur']); ?>"> 
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary mt-2 text-secondary ">Enregistrer les modifications</button>
            </div>
        </form>
        <hr class="border-primary border-3 mt-5">
        <form class="row mt-5 ">
        <h3 class="fw-light fs-5  "><i class="fa-solid fa-lock"></i> Mot de passe</h3>
          <div class="row">
            <div class="col-lg-6 col-md-3 col-12  mt-3">
                <label for="nom d-block">Mot de passe actuel</label>
                <input type="password" name="nom" class="p-2 w-100 form-control mt-2 d-block rounded rounded-3 border-1" >
            </div>
          </div>
            <div class="col-lg-6 col-md-3 col-12 mt-3">
                <label for="nom d-block">Nouveau mot de passe</label>
                <input type="password" name="nom" class="p-2 w-100 form-control mt-2 d-block rounded rounded-3 border-1"  >
            </div>
            <div class="col-lg-6 col-md-3 col-12 mt-3">
                <label for="nom d-block">Confirmer le nouveau mot de passe</label>
                <input type="password" name="nom" class="p-2 w-100 form-control mt-2 d-block rounded rounded-3 border-1" >
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary text-secondary mt-2">Enregistrer les modifications</button>
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