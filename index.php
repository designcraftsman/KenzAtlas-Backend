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
            <div class="carousel-inner heroSection__container__carousel">
              <div class="carousel-item h-100  active heroSection__container__carousel__item" data-bs-interval="10000">
                <img  src="assets/img/homePage/heroSection/heroSection1.jpg"  class="d-block heroSection__container__carousel__item__img " alt="...">
                <div class=" heroSection__container__carousel__item__info    ">
                  <div class="heroSection__container__carousel__item__info__text ">
                    <h3 class="fs-6 fw-light heroSection__container__carousel__item__info__h3 ">ÉLÉMENTS ESSENTIELS</h3>
                    <h2 class="fs-1  fw-bold mt-3 heroSection__container__carousel__item__info__h2">Une beauté inspirée de la vraie vie</h2>
                    <p class="fs-6 mt-3 heroSection__container__carousel__item__info__p ">Fabriqués à partir d'ingrédients propres et non toxiques, nos produits sont conçus pour tout le monde.</p>
                  </div> 
                  <button type="button" class="btn btn-primary btn-lg text-secondary fs-5 heroSection__container__carousel__item__info__btn fw-bolder">Acheter Maintenant</button>
                </div>
              </div>
              <div class="carousel-item  h-100  heroSection__container__carousel__item" data-bs-interval="2000">
                <img src="assets/img/homePage/heroSection/heroSection2.jpg" class="d-block heroSection__container__carousel__item__img  " alt="...">
                <div class=" heroSection__container__carousel__item__info    ">
                  <div class="heroSection__container__carousel__item__info__text ">
                    <h3 class="fs-6 fw-light heroSection__container__carousel__item__info__h3 ">ÉLÉMENTS ESSENTIELS</h3>
                    <h2 class="fs-1  fw-bold mt-3 heroSection__container__carousel__item__info__h2">Une beauté inspirée de la vraie vie</h2>
                    <p class="fs-6 mt-3 heroSection__container__carousel__item__info__p ">Fabriqués à partir d'ingrédients propres et non toxiques, nos produits sont conçus pour tout le monde.</p>
                  </div> 
                  <button type="button" class="btn btn-primary btn-lg text-secondary fs-5 heroSection__container__carousel__item__info__btn fw-bolder">Acheter Maintenant</button>
                </div>
              </div> 
              <div class="carousel-item  h-100 heroSection__container__carousel__item">
                <img src="assets/img/homePage/heroSection/heroSection3.jpg" class="d-block  heroSection__container__carousel__item__img  " alt="...">
                <div class=" heroSection__container__carousel__item__info    ">
                  <div class="heroSection__container__carousel__item__info__text ">
                    <h3 class="fs-6 fw-light heroSection__container__carousel__item__info__h3 ">ÉLÉMENTS ESSENTIELS</h3>
                    <h2 class="fs-1  fw-bold mt-3 heroSection__container__carousel__item__info__h2">Une beauté inspirée de la vraie vie</h2>
                    <p class="fs-6 mt-3 heroSection__container__carousel__item__info__p ">Fabriqués à partir d'ingrédients propres et non toxiques, nos produits sont conçus pour tout le monde.</p>
                  </div> 
                  <button type="button" class="btn btn-primary btn-lg text-secondary fs-5 heroSection__container__carousel__item__info__btn fw-bolder">Acheter Maintenant</button>
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
        <div class="col-lg-3 col-md-6 col-10 mt-2 ">
          <div class="card border-0 m-auto w-100 ProductsCards" >
            <a href="product" class="text-decoration-none text-dark">
            <div class="ProductsImageContainers">
              <img src="assets/img/homePage/featuredProducts/product2.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
              <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
            </div>
            <div class="card-body">
              <div class=" d-none">
                <span class="shop__container__products__list__product__details__categorie">shampoing</span>
                <span class="shop__container__products__list__product__details__etat">promotion</span>
              </div>
              <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">250.00</span>dh</p>
              <p class="card-text text-center m-1">Gel Douch</p>
              <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
            </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-10 mt-2 ">
          <div class="card border-0 m-auto w-100 ProductsCards" >
            <a href="product" class="text-decoration-none text-dark">
            <div class="ProductsImageContainers">
              <img src="assets/img/homePage/featuredProducts/product1.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
              <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
            </div>
            <div class="card-body">
              <div class=" d-none">
                <span class="shop__container__products__list__product__details__categorie">savon</span>
                <span class="shop__container__products__list__product__details__etat">promotion</span>
              </div>
              <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">180.99</span>dh</p>
              <p class="card-text text-center m-1">Savon beldi</p>
              <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
            </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-10 mt-2 ">
          <div class="card border-0 m-auto w-100 ProductsCards" >
            <a href="product" class="text-decoration-none text-dark">
            <div class="ProductsImageContainers">
              <img src="assets/img/homePage/featuredProducts/product3.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
              <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
            </div>
            <div class="card-body">
              <div class=" d-none">
                <span class="shop__container__products__list__product__details__categorie">ghassoul</span>
                <span class="shop__container__products__list__product__details__etat">promotion</span>
              </div>
              <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">60.00</span>dh</p>
              <p class="card-text text-center m-1">Shampoing</p>
              <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
            </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-10 mt-2 ">
          <div class="card border-0 m-auto w-100 ProductsCards" >
            <a href="product" class="text-decoration-none text-dark">
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
              <p class="card-text text-center m-1">Ghassoul</p>
              <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
            </div>
            </a>
          </div>
        </div>
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
        <div class="col-lg-3 col-md-6 col-12 mt-2 blogSection__container m-auto ">
          <div class="card border-0 m-auto blogSection__container__item w-100" >
            <img loading="lazy" src="assets/img/homePage/blogSection/article1.jpg" class="card-img-top object-fit-cover" alt="...">
            <div class="card-body ">
              <h5 class="card-title blog__container__posts__post__text__title">LA PEAU SÈCHE DU CORPS : HYDRATER POUR COMBATTRE TIRAILLEMENTS ET PICOTEMENTS</h5>
              <p class="card-text blog__container__posts__post__text__body">Une peau sèche, voire très sèche, est par nature fragile et facilement irritable. La sécheresse cutanée est en effet à l'origine de sensations inconfortables, comme des picotements et des tiraillements. Une peau du corps sèche présente également par endroits des craquelures et des fissures. Elle a enfin tendance à peler et à laisser les rides apparaître davantage. A noter : il n'y a pas une peau sèche mais des peaux sèches. On distingue ainsi la peau sèche d'origine génétique, la peau sèche de la personne atopique, la peau sèche hivernale, la peau sèche aiguë causée par des produits nettoyants inadaptés..</p>
              <a href="article.html" class="btn  btn-dark border-1 border-dark PostsButtons">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-2 m-auto  ">
          <div class="card border-0 m-auto blogSection__container__item   w-100" >
            <img loading="lazy" src="assets/img/homePage/blogSection/article2.jpg" class="card-img-top  object-fit-cover " alt="...">
            <div class="card-body">
              <h5 class="card-title blog__container__posts__post__text__title">MICROBIOME : SES BÉNÉFICES POUR LA PEAU</h5>
              <p class="card-text blog__container__posts__post__text__body">Véritable fourmilière géante, notre corps est composé de toutes sortes d’organismes dont chaque espèce joue un rôle de maintien global de notre santé. La vision sensationnaliste datant de l’époque victorienne selon laquelle « les microbes sont mauvais » n’est valable que dans les livres d'histoire, pas en matière de soins quotidiens de la peau. Commençons par le côté humain du phénomène : chaque environnement formant les nombreux « paysages » richement peuplés de notre organisme se rend accueillant pour ses innombrables hôtes. Par exemple, la peau apporte humidité et chaleur, ainsi que des oligo-éléments et des sources de carbone et d’azote pour satisfaire ses précieux résidents. En retour, les microbes y ayant élu domicile remplissent de multiples fonctions afin de maintenir leur foyer en bonne santé.</p>
              <a href="article.html" class="btn  btn-dark border-1 border-dark PostsButtons">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-2 m-auto ">
          <div class="card border-0 m-auto blogSection__container__item w-100" >
            <img loading="lazy" src="assets/img/homePage/blogSection/article3.jpg" class="card-img-top object-fit-cover" alt="...">
            <div class="card-body">
              <h5 class="card-title blog__container__posts__post__text__title">COMMENT TRAITER LA PEAU SÈCHE ET DÉSHYDRATÉE?</h5>
              <p class="card-text blog__container__posts__post__text__body">Le froid, le vent, l’eau calcaire, l’hygiène de vie ou encore une prédisposition génétique : de nombreux facteurs engendrent la sécheresse de la peau. Dans cet article, apprenez à comprendre les phénomènes qui causent la déshydratation et la sécheresse de l’épiderme afin de mieux prendre soin de votre peau au quotidien et d’éviter les désagréments qui en découlent.</p>
              <a href="article.html" class="btn btn-dark border-1 border-dark PostsButtons">En savoir plus</a>
            </div>
          </div>
        </div>
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