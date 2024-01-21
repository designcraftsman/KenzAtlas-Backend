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



    <!--cart section start-->
    <div class="container">
        <h1 class="fs-4 mt-5 fw-bolder ">Mon Panier</h1>
        
        <div class="row mt-3 ">
            <div  class="col-lg-8 col-12  p-3 cartProducts">
                <div class="row">
                    <div class="col-4 fs-5 fw-semibold ">Produit</div>
                    <div class="col-4  fs-5 fw-semibold">Prix</div>
                    <div class="col-4  fs-5 fw-semibold">Quantité</div>
                </div>
                <hr class="border-primary border-1 ">



                <!-- cart.js content -->         
                
                

            </div>
            <div class="cartRecap  col-lg-3 col-12 p-3 offset-lg-1 offset-0 mt-lg-0 mt-5  border border-1 border-primary h-100">
                <h2 class="fs-5 fw-semibold ">Résumé du panier</h2>
                <hr class="border-1 border-primary ">
                <div class="d-flex justify-content-between align-items-center mt-3 ">
                    <h3 class="fs-6 fw-bold m-0 p-0">Sous-total :</h3>
                    <p class="fs-6 fw-bold m-0 p-0"><span id="cartTotalCost" class="fw-bold">0 </span> dh</p>
                </div>
                <hr class="border-1 border-primary ">
                <button id="cartConfirmBtn" class="btn btn-primary btn-lg text-secondary w-100 mt-3">Commander</button>
            </div>
        </div>
    </div>


    <!-- cart section end-->


    <!-- related products section debut-->

    <section class="mt-5 container mb-5">
        <h2 class="text-center fw-bolder m-3">Vous pourriez aimer</h2>
        <div class="row d-flex justify-content-center align-content-center  mt-5  ">
          <div class="col-lg-3 col-md-6 col-10 mt-2 ">
            <div class="card border-0 m-auto w-100 ProductsCards" >
              <a href="product.html" class="text-decoration-none text-dark">
              <div class="ProductsImageContainers">
                <img src="assets/img/homePage/featuredProducts/product4.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
                <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
              </div>
              <div class="card-body">
                <div class=" d-none">
                  <span class="shop__container__products__list__product__details__categorie">savon</span>
                  <span class="shop__container__products__list__product__details__etat">promotion</span>
                </div>
                <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                <p class="card-text text-center m-1">Gel Douch</p>
                <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
              </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-10 mt-2 ">
            <div class="card border-0 m-auto w-100 ProductsCards" >
              <a href="product.html" class="text-decoration-none text-dark">
              <div class="ProductsImageContainers">
                <img src="assets/img/homePage/featuredProducts/product1.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
                <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
              </div>
              <div class="card-body">
                <div class=" d-none">
                  <span class="shop__container__products__list__product__details__categorie">savon</span>
                  <span class="shop__container__products__list__product__details__etat">promotion</span>
                </div>
                <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                <p class="card-text text-center m-1">Gel Douch</p>
                <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
              </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-10 mt-2 ">
            <div class="card border-0 m-auto w-100 ProductsCards" >
              <a href="product.html" class="text-decoration-none text-dark">
              <div class="ProductsImageContainers">
                <img src="assets/img/homePage/featuredProducts/product2.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
                <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
              </div>
              <div class="card-body">
                <div class=" d-none">
                  <span class="shop__container__products__list__product__details__categorie">savon</span>
                  <span class="shop__container__products__list__product__details__etat">promotion</span>
                </div>
                <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                <p class="card-text text-center m-1">Gel Douch</p>
                <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
              </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-10 mt-2 ">
            <div class="card border-0 m-auto w-100 ProductsCards" >
              <a href="product.html" class="text-decoration-none text-dark">
              <div class="ProductsImageContainers">
                <img src="assets/img/homePage/featuredProducts/product3.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
                <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
              </div>
              <div class="card-body">
                <div class=" d-none">
                  <span class="shop__container__products__list__product__details__categorie">savon</span>
                  <span class="shop__container__products__list__product__details__etat">promotion</span>
                </div>
                <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                <p class="card-text text-center m-1">Gel Douch</p>
                <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
              </div>
              </a>
            </div>
          </div>
          </div>
    </section>
    

    <!--related products section end-->



    
   <!--footer start -->

   <?php include('footer.php'); ?>


<!-- footer end -->

  <script src="js/explore.js"></script>
  <script src="js/scrollReveal.js"></script>
  <script src="js/cart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/searchBar.js"></script>
</body>
  </html>