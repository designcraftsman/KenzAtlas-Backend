<?php session_start(); ?>
<?php     
          try{
              include('connection.php');
              $sqlQuery = 'SELECT * FROM `produit` ORDER BY `produit`.`moyenneNotation` DESC LIMIT 4';
              $produitsVedetteStatement = $db->prepare($sqlQuery);
              $produitsVedetteStatement->execute();
              $produitsVedette = $produitsVedetteStatement->fetchAll();
              include('connection.php');
              $sqlQuery = 'SELECT * FROM `articles` ORDER BY `articles`.`dateArticle` DESC LIMIT 3';
              $articlesStatement = $db->prepare($sqlQuery);
              $articlesStatement->execute();
              $articles = $articlesStatement->fetchAll();
              include('connection.php');
              $sqlQuery = 'SELECT * FROM `produit` WHERE etatproduit = "pack promo" ORDER BY `produit`.`moyenneNotation` DESC LIMIT 3';
              $packsStatement = $db->prepare($sqlQuery);
              $packsStatement->execute();
              $packs = $packsStatement->fetchAll();
          }catch(error){
            header("Location: error");
          }
              ?>
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



    <!--hero section debut-->
    <section class="heroSection">
        <div id="carouselExampleDark" class="carousel carousel-dark slide heroSection__container  " data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active bg-secondary  rounded-circle " aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" class="bg-secondary  rounded-circle" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" class="bg-secondary  rounded-circle" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner active heroSection__container__carousel">
              <div class="carousel-item h-100  active heroSection__container__carousel__item" data-bs-interval="10000">
                <img  src="<?php echo($packs[0]['imageProduit1']); ?>"  class="d-block heroSection__container__carousel__item__img " alt="...">
                <div class=" heroSection__container__carousel__item__info    ">
                  <div class="heroSection__container__carousel__item__info__text ">
                    <h3 class="fs-6 fw-light heroSection__container__carousel__item__info__h3 ">PACK</h3>
                    <h2 class="fs-1  fw-bold mt-3 heroSection__container__carousel__item__info__h2"><?php echo($packs[0]['nomProduit']); ?></h2>
                    <p class="fs-6 mt-3 heroSection__container__carousel__item__info__p "><?php echo($packs[0]['sousTitreProduit']); ?></p>
                  </div> 
                  <a type="button" href="product?idProduit=<?php echo($packs[0]['idProduit']); ?>" class="btn btn-primary btn-lg text-secondary fs-5  fw-bolder">Acheter Maintenant</a>
                </div>
              </div>
              <div class="carousel-item h-100   heroSection__container__carousel__item" data-bs-interval="10000">
                <img  src="<?php echo($packs[1]['imageProduit1']); ?>"  class="d-block heroSection__container__carousel__item__img " alt="...">
                <div class=" heroSection__container__carousel__item__info    ">
                  <div class="heroSection__container__carousel__item__info__text ">
                    <h3 class="fs-6 fw-light heroSection__container__carousel__item__info__h3 ">PACK</h3>
                    <h2 class="fs-1  fw-bold mt-3 heroSection__container__carousel__item__info__h2"><?php echo($packs[1]['nomProduit']); ?></h2>
                    <p class="fs-6 mt-3 heroSection__container__carousel__item__info__p "><?php echo($packs[1]['sousTitreProduit']); ?></p>
                  </div> 
                  <a type="button" href="product?idProduit=<?php echo($packs[1]['idProduit']); ?>" class="btn btn-primary btn-lg text-secondary fs-5  fw-bolder">Acheter Maintenant</a>
                </div>
              </div>
              <div class="carousel-item h-100   heroSection__container__carousel__item" data-bs-interval="10000">
                <img  src="<?php echo($packs[2]['imageProduit1']); ?>"  class="d-block heroSection__container__carousel__item__img " alt="...">
                <div class=" heroSection__container__carousel__item__info    ">
                  <div class="heroSection__container__carousel__item__info__text ">
                    <h3 class="fs-6 fw-light heroSection__container__carousel__item__info__h3 ">PACK</h3>
                    <h2 class="fs-1  fw-bold mt-3 heroSection__container__carousel__item__info__h2"><?php echo($packs[2]['nomProduit']); ?></h2>
                    <p class="fs-6 mt-3 heroSection__container__carousel__item__info__p "><?php echo($packs[2]['sousTitreProduit']); ?></p>
                  </div> 
                  <a type="button" href="product?idProduit=<?php echo($packs[2]['idProduit']); ?>" class="btn btn-primary btn-lg text-secondary fs-5  fw-bolder">Acheter Maintenant</a>
                </div>
              </div>
              
              
              
               
            </div>
          </div>
    </section>

    <!--hero section end-->


    <!--featured products section start -->
    <section class="container featuredProducts mt-5 ">
      <h2 class="featuredProducts__title fs-1 text-center reveal">Nos produits vedettes</h2>
      <h4 class="featuredProducts__subTitle fs-4 fw-lighter text-center reveal ">Obtenez la peau que vous désirez</h4>
      <div class="row d-flex featuredProducts__products justify-content-center align-content-center  mt-5  reveal">
        <?php foreach($produitsVedette as $produit){ ?>
        <div class="col-lg-3 col-md-6 col-10 mt-2 ">
          <div class="card border-0 m-auto w-100 ProductsCards" >
            <a href="product?idProduit=<?php echo($produit['idProduit']); ?>" class="text-decoration-none text-dark">
            <div class="ProductsImageContainers">
              <img src="<?php echo($produit['imageProduit1']); ?>" class="img-fluid card-img-top ProductsImages" alt="...">
              <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
            </div>
            <div class="card-body">
              <div class=" d-none">
                <span class="shop__container__products__list__product__details__categorie"><?php echo($produit['categorieProduit']); ?></span>
                <span class="shop__container__products__list__product__details__etat"><?php echo($produit['etatProduit']); ?></span>
              </div>
              <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price"><?php echo($produit['prixProduit']); ?></span>dh</p>
              <p class="card-text text-center m-1"><?php echo($produit['nomProduit']); ?></p>
              <p class="card-text text-center m-1">
                <?php for($i=0 ; $i < $produit['moyenneNotation']; $i++){ ?>
                <i class="fa-solid fa-star fa-xs text-primary m-1"></i>
                  <?php } ?>
              </p>
            </div>
            </a>
          </div>
        </div>
        <?php } ?>
       
      </div>
    </section>

    <!--featured products section end -->


    <!--categories section start-->

    <section class="container-fluid text-center mt-5 categoriesSection">
      <div class="row categoriesSection__container">
        <div class="col-lg-6 col-12   p-0 categoriesSection__container__item mt-2 mb-4">
          <img src="assets/img/homePage/categoriesSection/haircare.jpg " class="w-100 h-100 reveal" alt="">
          <div class="categoriesSection__container__item__info text-secondary reveal">
            <h3 class="categoriesSection__container__item__info__h3 fs-2 fw-lighter   ">Meilleur de</h3>
            <h2 class="categoriesSection__container__item__info__h2 fs-1 fw-bolder ">SOIN DES <br> CHEVEUX</h2>
            <button type="button" id="exploreHair" class="btn btn-primary btn-lg  text-secondary fw-bold  ">Explorer</button>
          </div>
        </div>
        <div class="col-lg-6 col-12  p-0  categoriesSection__container__item mt-5 ">
          <img src="assets/img/homePage/categoriesSection/skincare2.jpg " class="w-100 h-100 reveal" alt="">
          <div class="categoriesSection__container__item__info text-secondary reveal ">
            <h3 class="categoriesSection__container__item__info__h3 fs-2 fw-lighter ">Meilleur de</h3>
            <h2 class="categoriesSection__container__item__info__h2 fs-1 fw-bolder ">SOIN DE <br> LA PEAU</h2>
            <button type="button" id="exploreSkin" class="btn btn-primary btn-lg text-secondary fw-bold  ">Explorer</button>
          </div>
        </div>
      </div>
    </section>

    <!--categories section end-->


    
    <!--info section start-->
    <section class="container  infoSection p-5 " >
      <div class="row text-center infoSection__container  p-5  d-flex flex-wrap justify-content-center ">
        <div class="col-lg-4 col-md-6 col-12 infoSection__container__item  mt-5 ">
          <div class="infoSection__container__item__icon m-3 reveal"><i class="fa-solid fa-truck display-1 text-primary "></i></div>
          <h2 class="infoSection__container__item__title  m-4 fs-3 fw-bold 3  reveal ">Livraison gratuite</h2>
          <h3 class="infoSection__container__item__subTitle fw-normal fs-5  reveal">Livraison gratuite pour les commandes de plus de 130 $</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-12 infoSection__container__item  mt-5 ">
          <div class="infoSection__container__item__icon m-3 reveal"><i class="fa-solid fa-arrow-right-arrow-left display-1  text-primary "></i></div>
          <h2 class="infoSection__container__item__title fw-bold  m-4 fs-3  reveal">Échange</h2>
          <h3 class="infoSection__container__item__subTitle fw-normal fs-5 reveal">Sous 30 jours pour un échange</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-12  infoSection__container__item   mt-5 ">
          <div class="infoSection__container__item__icon m-3 reveal"><i class="fa-solid fa-phone display-1   text-primary "></i></div>
          <h2 class="infoSection__container__item__title fw-bold  m-4 fs-3 reveal">Support en ligne</h2>
          <h3 class="infoSection__container__item__subTitle fw-normal  fs-5 reveal">24 heures sur 24, 7 jours sur 7</h3>
        </div>
      </div>
    </section>

    <!--infoSection end-->



    <!--client Review section start-->

    <section class="clientReviewSection container-fluid bg-primary p-3 reveal">
      <div class="container  p-2 clientReviewSection">
        <div class="row clientReviewSection__container align-items-center ">
          <div class="col-lg-3  col-12 clientReviewSection__container__text  text-lg-start text-center    ">
            <div class="clientReviewSection__container__text__icon m-4 reveal"><img src="assets/img/homePage/clientReviewsSection/clientReview.svg" class="w-25 text-secondary " alt=""></div>
            <h2 class="clientReviewSection__container__text__title m-4 fs-2 fw-bold reveal">Avis client</h2> 
            <h3 class="clientReviewSection__container__text__subTitle m-4 fs-3 fw-light reveal">Ce que nos clients disent de nos produits</h3> 
          </div>
          <div class="col-lg-8 col-12 clientReviewSection__container__screenshots p-5 m-auto ">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner ">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row">
                    <div class="col-lg-5 col-md-8 col-9 m-auto ">
                      <div class="card text-center h-100">
                        <div class="card-header">
                          <img src="assets/img/homePage/clientReviewsSection/review1.jpg" class="w-25 rounded-circle " alt="">
                          <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
                        </div>
                        <div class="card-body">
                          <p class="card-text fs-6">J'utilise ce savon depuis quelques semaines maintenant et je ne peux m'empêcher de partager à quel point mon expérience a été extraordinaire. Dès le premier contact, j'ai été séduit par son parfum délicat qui évoque la fraîcheur et la propreté.</p>
                        </div>
                        <div class="card-footer text-muted">
                          Sara lotfi
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row">
                    <div class="col-lg-5 col-md-8 col-9 m-auto ">
                      <div class="card text-center  h-100">
                        <div class="card-header">
                          <img src="assets/img/homePage/clientReviewsSection/review2.jpg" class="w-25 object-fit-cover  rounded-circle " alt="">
                          <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
                        </div>
                        <div class="card-body">
                          
                          <p class="card-text fs-6">Je suis ravi de partager mon expérience avec ce shampoing qui a totalement conquis mon cœur capillaire. Dès la première utilisation, j'ai été impressionné par son parfum délicat qui transforme ma douche en une expérience agréable et relaxante.</p>
                        </div>
                        <div class="card-footer text-muted">
                          Aicha sadik
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row  ">
                    <div class="col-lg-5 col-md-8 col-9  m-auto">
                      <div class="card text-center  ">
                        <div class="card-header">
                          <img src="assets/img/homePage/clientReviewsSection/review3.jpg" class="w-25 rounded-circle " alt="">
                          <p class="card-text text-center m-1 "><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
                        </div>
                        <div class="card-body">
                          
                          <p class="card-text fs-6">La qualité des ingrédients utilisés est indéniable. Cette huile est composée d'extraits naturels qui nourrissent la peau en profondeur, et j'apprécie particulièrement l'absence de produits chimiques agressifs. De plus, le flacon en verre somptueux ajoute une touche d'élégance à ma routine de soins.</p>
                        </div>
                        <div class="card-footer text-muted">
                          Fatima imrane
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div> 
    </section>


    <!--clientReview section end-->



    <!-- blog section start-->

    <section class="container-fluid p-5 blogSection">
      <div class="text-center blogSection__textContainer">
        <h2 class="blogSection__textContainer__title fs-2 fw-bold reveal">De notre blog</h2>
        <h3 class="blogSection__textContainer__subTitle fs-3 fw-lighter reveal">Découvrez nos dernières informations</h3>
      </div>
      <div class="row  mt-5 reveal ">
        <?php foreach($articles as $article){ ?>
        <div class="col-lg-3 col-md-6 col-12 mt-2 blogSection__container m-auto ">
          <div class="card border-0 m-auto blogSection__container__item w-100" >
            <img loading="lazy" src="<?php echo($article['imgArticle']); ?>" class="card-img-top object-fit-cover" alt="...">
            <div class="card-body ">
              <h5 class="card-title blog__container__posts__post__text__title"><?php echo($article['titreArticle']); ?></h5>
              <p class="card-text blog__container__posts__post__text__body"><?php echo($article['contenuArticle']); ?></p>
              <a href="article?idArticle=<?php echo($article['idArticle']); ?>" class="btn  btn-dark border-1 border-dark PostsButtons">En savoir plus</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>

    <!--blog section end-->

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