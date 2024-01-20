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



    <!-- product section start-->

    <div class="container productPage ">
        <div class="row p-3 productPage__container align-items-center ">
            <div class="col-lg-5 col-12 m-auto productPage__container__imgContainer position-relative ">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active productPage__container__imgContainer__img h-100">
                    <img src="assets/img/homePage/featuredProducts/product4.jpg " class="object-fit-cover productPage__product__img d-block w-100 productPage__container__imgContainer__img__select " alt="...">
                  </div>
                  <div class="carousel-item productPage__container__imgContainer__img h-100">
                    <img src="assets/img/homePage/featuredProducts/product1.jpg" class="object-fit-cover d-block w-100 productPage__container__imgContainer__img__select " alt="...">
                  </div>
                  <div class="carousel-item productPage__container__imgContainer__img h-100">
                    <img src="assets/img/homePage/featuredProducts/product3.jpg" class="object-fit-cover d-block w-100 productPage__container__imgContainer__img__select " alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span  aria-hidden="true"><i class="fa-solid fa-chevron-left fa-2xl productPage__container__imgContainer__chevrons " ></i></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span  aria-hidden="true"><i class="fa-solid fa-chevron-right fa-2xl productPage__container__imgContainer__chevrons" ></i></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>   
            </div>
            <div class="col-lg-5 col-12  productPage__product mt-5">
                <h1 class="fw-normal fs-2 productPage__product__title">Huile pour cheveux</h1>
                <p class="fw-lighter  fs-3 "><span class="productPage__product__price">64.00</span>dh</p>
                <span class="d-none productPage__product__id">5536</span>
                <p><span class="m-2 ms-0"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></span> | <span class="m-2">3 reviews </span></p>
                <p class="fw-lighter fs-5">Niacinamide and Vitamin C are two anti-aging superstars but not usually formulated together because of their different pH levels.
                </p>
                <div class="d-flex justify-content-between align-items-center p-2 ">
                    <p class="w-50 fs-6">Quantité : <input class="w-50 rounded border-1 text-center fw-bolder productPage__product__quantity " min="1" max="10" value="1" type="number"></input></p>
                    <i class="fa-brands fa-square-whatsapp  fa-2xl fs-1  " style="color: #43ce1c;"></i>
                </div>
                <button id="addProductToCart"type="button"class="btn btn-primary text-secondary w-100 btn-lg fw-bolder ">Ajouter au panier</button>
            </div>
        </div>
        <section class="mt-5" >
            <h2 class="fs-2 fw-bolder text-center p-2 reveal">Détails du Produit</h2>
            <p class=" fs-6 fw-light m-3 p-2 reveal">
                For Normal, Oily, Combination Skin Types
                Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits, vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for soft, velvety smooth skin.
                Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades. This lightweight, innovative formula creates a smooth, natural matte finish that won’t settle into lines. It’s the perfect fit for your skin. 1 fl. oz.</p>
        </section>
        <section class="mt-5">
            <h2 class="fs-2 fw-bolder text-center m-3 reveal">Ingrédients</h2>
            <p class="fs-6 fw-light m-3 p-2 reveal">
                -Nannochloropsis Oculata (micro algae) extract, pullulan.<br>
                -Nannochloropsis Oculata (micro algae) extract, pullulan, water, ethanol.<br>
                -Yellow to amber, viscous liquid.
                </p>
        </section>


        <section class="mt-5">
            <h2 class="text-center fw-bolder m-3 reveal">Vous pourriez aussi aimer</h2>
            <div class="row d-flex justify-content-center align-content-center  mt-5 ">
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


        <section class="mt-5 p-3 ">
            <h2 class="text-center fw-bolder m-3 reveal">Avis Clients</h2>
            <div class="comments">
            <div class="comment mt-5 reveal">
                <h1 class="fs-5 fw-bold">Fatiha <span class="m-2"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></span></h1>
                <p class="fs-6 fw-light">A ne pas rater</p>
                <p class="fs-6 fw-lighter">24 Decembre 2023</p>
                <hr class="border-primary border-3">
            </div>
            <div class="comment mt-5 reveal">
                <h1 class="fs-5 fw-bold">Fatiha <span class="m-2"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></span></h1>
                <p class="fs-6 fw-light">A ne pas rater</p>
                <p class="fs-6 fw-lighter">24 Decembre 2023</p>
                <hr class="border-primary border-3">
            </div>
            <div class="comment mt-5 reveal">
                <h1 class="fs-5 fw-bold">Fatiha <span class="m-2"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></span></h1>
                <p class="fs-6 fw-light">A ne pas rater</p>
                <p class="fs-6 fw-lighter">24 Decembre 2023</p>
                <hr class="border-primary border-3">
            </div>
            </div>

        </section>
    </div>



    <!-- product section end-->


 <!--footer start -->

 <?php include('footer.php'); ?>
  
  <!--footer end-->


  <script src="js/cart.js"></script>
  <script src="js/scrollReveal.js"></script>
  <script src="js/searchBar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/addToCart.js"></script>
  </body>
  </html>
