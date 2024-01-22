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
<body  >
    <?php include('navbar.php'); ?>

    <div class="container min-vh-100">
            <div class="row mt-5 mb-5 ">
                    <h2 class="fw-bold fs-3">Mes commandes</h2>
                    <table class="table mt-3  p-3 fs-6">
                        <thead>
                        <tr class="border-primary ">
                            <th scope="col ">Numero de commande</th>
                            <th scope="col">Date</th>
                            <th scope="col">Commande</th>
                            <th scope="col">Prix</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-primary " >
                            <th scope="row">5563</th>
                            <td>1 janvier 2024</td>
                            <td>ghassoul,savon beldi</td>
                            <td>250dh</td>
                        </tr>
                        <tr class="border-primary ">
                            <th scope="row">5563</th>
                            <td>1 janvier 2024</td>
                            <td>ghassoul,savon beldi</td>
                            <td>250dh</td>
                        </tr>
                        <tr class="border-primary ">
                            <th scope="row">5563</th>
                            <td>1 janvier 2024</td>
                            <td>ghassoul,savon beldi</td>
                            <td>250dh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <?php include('footer.php'); ?>

    <script src="js/scrollReveal.js"></script>
  <script src="js/cart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  </html>