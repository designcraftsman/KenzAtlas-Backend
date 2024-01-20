<?php require_once('connection.php'); ?>

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

    <!--blog articles start-->
    <div class="container-fluid p-3 blog  ">
        <div  class="row blog__container">
          <div id="postsContainer" class="col-lg-8 col-md-12 col-12 blog__container__posts">
            <?php 
                $sqlQuery = 'SELECT * FROM articles';
                $articlesStatement = $db->prepare($sqlQuery);
                $articlesStatement->execute();
                $articles = $articlesStatement->fetchAll();
                foreach ($articles as $article) { 
            ?>
            <div class="row align-items-center m-2 mt-5 blog__container__posts__post">
              <div class="col-lg-5 col-md-6 col-12 blog__container__posts__post__imgContainer">
                <img src="<?php echo($article['imgArticle']); ?>" class="w-100 object-fit-cover blog__container__posts__post__imgContainer__img" alt="">
              </div>
              <div class="col-lg-7 col-md-6 col-12 blog__container__posts__post__text">
                <h2 class="fs-3 blog__container__posts__post__text__title m-2"><?php echo($article['titreArticle']); ?></h2>
                <p class="text-body fs-5 fw-light blog__container__posts__post__text__body m-2"><?php echo($article['contenuArticle']); ?></p>
                <p class="fw-lighter  fs-6 blog__container__posts__post__text__date m-2"><?php echo($article['dateArticle']); ?></p>
                <button class="btn btn-dark    text-secondary fw-bold m-2">En savoir plus</button>
              </div>
            </div>
            <?php }?>
            <div class="row align-items-center m-2 mt-5 blog__container__posts__post">
              <div class="col-lg-5 col-md-6 col-12 blog__container__posts__post__imgContainer">
                <img src="assets/img/homePage/blogSection/article1.jpg" class="w-100 object-fit-cover blog__container__posts__post__imgContainer__img" alt="">
              </div>
              <div class="col-lg-7 col-md-6 col-12 blog__container__posts__post__text">
                <h2 class="fs-3 blog__container__posts__post__text__title m-2">Solution pour l'acné et les peaux sensibles</h2>
                <p class="text-body fs-5 fw-light blog__container__posts__post__text__body m-2">Amet porttitor eget dolor morbi non. Laoreet id donec ultrices tincidunt arcu non sodales neque. Laoreet sit amet cursus sit. Urna id volutpat lacus laoreet non curabitur gravidaVel facilisis volutpat</p>
                <p class="fw-lighter  fs-6 blog__container__posts__post__text__date m-2">Decembre 04 2023</p>
                <button class="btn btn-dark    text-secondary fw-bold m-2">En savoir plus</button>
              </div>
            </div>
            <div class="row align-items-center m-2 mt-5 blog__container__posts__post">
              <div class="col-lg-5 col-md-6 col-12 blog__container__posts__post__imgContainer">
                <img src="assets/img/homePage/blogSection/article1.jpg" class="w-100 object-fit-cover blog__container__posts__post__imgContainer__img" alt="">
              </div>
              <div class="col-lg-7 col-md-6 col-12 blog__container__posts__post__text">
                <h2 class="fs-3 blog__container__posts__post__text__title m-2">Solution pour l'acné et les peaux sensibles</h2>
                <p class="text-body fs-5 fw-light blog__container__posts__post__text__body m-2">Amet porttitor eget dolor morbi non. Laoreet id donec ultrices tincidunt arcu non sodales neque. Laoreet sit amet cursus sit. Urna id volutpat lacus laoreet non curabitur gravidaVel facilisis volutpat</p>
                <p class="fw-lighter  fs-6 blog__container__posts__post__text__date m-2">Decembre 04 2023</p>
                <button class="btn btn-dark    text-secondary fw-bold m-2">En savoir plus</button>
              </div>
            </div>
            
            
            <div class="row align-items-center m-2 mt-5 blog__container__posts__post">
              <div class="col-lg-5 col-md-6 col-12  blog__container__posts__post__imgContainer">
                <img src="assets/img/homePage/blogSection/article1.jpg" class="w-100 object-fit-cover blog__container__posts__post__imgContainer__img" alt="">
              </div>
              <div class="col-lg-7 col-md-6 col-12  blog__container__posts__post__text">
                <h2 class="fs-3 blog__container__posts__post__text__title m-2">Solution pour l'acné et les peaux sensibles</h2>
                <p class="text-body fs-5 fw-light blog__container__posts__post__text__body m-2">Amet porttitor eget dolor morbi non. Laoreet id donec ultrices tincidunt arcu non sodales neque. Laoreet sit amet cursus sit. Urna id volutpat lacus laoreet non curabitur gravidaVel facilisis volutpat</p>
                <p class="fw-lighter  fs-6 blog__container__posts__post__text__date m-2">Decembre 04 2023</p>
                <button class="btn btn-dark    text-secondary fw-light m-2">En savoir plus</button>
              </div>
            </div>
            <div class="row align-items-center m-2 mt-5 blog__container__posts__post">
              <div class="col-lg-5 col-md-6 col-12  blog__container__posts__post__imgContainer">
                <img src="assets/img/homePage/blogSection/article1.jpg" class="w-100 object-fit-cover blog__container__posts__post__imgContainer__img" alt="">
              </div>
              <div class="col-lg-7 col-md-6 col-12  blog__container__posts__post__text">
                <h2 class="fs-3 blog__container__posts__post__text__title m-2">Solution pour l'acné et les peaux sensibles</h2>
                <p class="text-body fs-5 fw-light blog__container__posts__post__text__body m-2">Amet porttitor eget dolor morbi non. Laoreet id donec ultrices tincidunt arcu non sodales neque. Laoreet sit amet cursus sit. Urna id volutpat lacus laoreet non curabitur gravidaVel facilisis volutpat</p>
                <p class="fw-lighter  fs-6 blog__container__posts__post__text__date m-2">Decembre 04 2023</p>
                <button class="btn btn-dark   text-secondary fw-bold m-2">En savoir plus</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-12   mt-5 blog__container__aside ">
            <div class=" col-12">
            <h2 class="fs-5 bg-primary p-2 rounded-4 text-secondary fw-light  blog__container__aside__title">Categories</h2>
              <a href="blog.html" class="d-block text-decoration-none fs-6 p-2 blog__container__aside__link rounded ">Soin visage</a>
              <hr class="m-0 p-0 border-primary ms-2">
              <a href="blog.html" class="d-block text-decoration-none fs-6 p-2 blog__container__aside__link rounded">Protection solaire</a>
              <hr class="m-0 p-0 border-primary ms-2">
              <a href="blog.html" class="d-block text-decoration-none fs-6 p-2 blog__container__aside__link rounded">Soin cheveux</a>
              <hr class="m-0 p-0 border-primary ms-2">
              <a href="blog.html" class="d-block text-decoration-none fs-6 p-2  blog__container__aside__link rounded">Beauté</a>
              <hr class="m-0 p-0 border-primary ms-2">
          </div>
          <div class="col-12">
            <h2 class="fs-5 bg-primary p-2 rounded-4 text-secondary mt-3  fw-light blog__container__aside__title">Articles Récents</h2>
            <div class="row p-2 blog__container__aside__recentPosts align-content-center ">
              <div class="col-4 blog__container__aside__recentPosts__img">
                <img src="assets/img/homePage/blogSection/article2.jpg" class="w-100 object-fit-cover " alt="">
              </div>
              <div class="col-8 blog__container__aside__recentPosts__text ">
                <p class="fs-6 fw-lighter m-0">Decembre 04 2023</p>
                <h2 class="fs-6 m-0 blog__container__aside__recentPosts__text__title">Solution pour l'acné et les peaux sensibles</h2>
              </div>
            </div>
            <div class="row p-2 blog__container__aside__recentPosts align-content-center ">
              <div class="col-4 blog__container__aside__recentPosts__img">
                <img src="assets/img/homePage/blogSection/article2.jpg" class="w-100 object-fit-cover " alt="">
              </div>
              <div class="col-8 blog__container__aside__recentPosts__text ">
                <p class="fs-6 fw-lighter m-0">Decembre 04 2023</p>
                <h2 class="fs-6 m-0 blog__container__aside__recentPosts__text__title">Solution pour l'acné et les peaux sensibles</h2>
              </div>
            </div>
            <div class="row p-2 blog__container__aside__recentPosts align-content-center ">
              <div class="col-4 blog__container__aside__recentPosts__img">
                <img src="assets/img/homePage/blogSection/article2.jpg" class="w-100 object-fit-cover " alt="">
              </div>
              <div class="col-8 blog__container__aside__recentPosts__text ">
                <p class="fs-6 fw-lighter m-0">Decembre 04 2023</p>
                <h2 class="fs-6 m-0 blog__container__aside__recentPosts__text__title">Solution pour l'acné et les peaux sensibles</h2>
              </div>
            </div>
            <div class="row p-2 blog__container__aside__recentPosts align-content-center ">
              <div class="col-4 blog__container__aside__recentPosts__img">
                <img src="assets/img/homePage/blogSection/article2.jpg" class="w-100 object-fit-cover " alt="">
              </div>
              <div class="col-8 blog__container__aside__recentPosts__text ">
                <p class="fs-6 fw-lighter m-0 ">Decembre 04 2023</p>
                <h2 class="fs-6 m-0 blog__container__aside__recentPosts__text__title">Solution pour l'acné et les peaux sensibles</h2>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center p-5">
      <nav aria-label="Page navigation example">
          <ul id="blogPagination" class="pagination pagination-lg  ">
          </ul>
      </nav>
  </div>
        


    <!-- footer start-->

   <!--footer start -->

   <?php include('footer.php'); ?>


<!-- footer end -->

    <script src="js/postsPagination.js"></script>
    <script src="js/explore.js"></script>
    <script src="js/scrollReveal.js"></script>
    <script src="js/cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/searchBar.js"></script></body>
  </html>