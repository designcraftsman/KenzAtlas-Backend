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

    <!--filter and product list section start-->
    <div class="container shop">
      <div class="row shop__container">
        <div class="  col-3 d-lg-block d-none  p-2  mt-3 shop__container__filterBar   ">
          <h2 class=" fs-6 fw-semibold mt-4  ">Catégorie</h2>
          <hr class="border-primary border-2 shop__container__filterBar__hr">
          <ul class="list-group list-unstyled mt-2 shop__container__filterBar__list  ">
            <li class="mt-2 text-dark fs-6">
              <input class="form-check-input me-1" type="checkbox" value="soin cheveux" aria-label="...">
              Soin cheveux
            </li>
            <li class="mt-2 text-dark fs-6 ">
              <input class="form-check-input me-1" type="checkbox" value="gommage" aria-label="...">
              Gommage
            </li>
            <li class="mt-2 text-dark fs-6">
              <input class="form-check-input me-1" type="checkbox" value="savon" aria-label="...">
              Savon
            </li>
            <li class="mt-2 text-dark fs-6">
              <input class="form-check-input me-1" type="checkbox" value="huile" aria-label="...">
              Huile
            </li>
            <li class="mt-2 text-dark fs-6">
              <input class="form-check-input me-1" type="checkbox" value="shampoing" aria-label="...">
              Shampoing
            </li>
          </ul>
          <h2 class=" fs-6 fw-semibold  mt-5 ">État du produit</h2>
          <hr class="border-primary border-2 shop__container__filterBar__hr">
          <ul class="list-group list-unstyled mt-2  ">
            <li class="mt-2 text-dark" fs-6>
              <input class="form-check-input me-1" type="checkbox" value="promotion" aria-label="...">
              Promotion
            </li>
            <li class="mt-2 text-dark fs-6">
              <input class="form-check-input me-1" type="checkbox" value="en stock " aria-label="...">
              En stock
            </li>
          </ul>
          <h2 class=" fs-6 fw-semibold  mt-5 ">Filtrer par prix</h2>
          <hr class="border-primary border-2"> 
          <div class="shop__container__filterBar__priceRangeContainer">
            <div class="shop__container__filterBar__priceRangeContainer__values">
              <div class="shop__container__filterBar__priceRangeContainer__values__value fs-6">
                Prix : 
                <input class="shop__container__filterBar__priceRangeContainer__values__value__minInput" type="number" id="fromInput" value="0" min="0" max="500"/>dh
                -
                <input class="shop__container__filterBar__priceRangeContainer__values__value__maxInput" type="number" id="toInput" value="500" min="0" max="500"/>
                dh
              </div>
              <button id="priceFilterBtn" class="btn btn-primary text-secondary priceFilterBtn">Filtrer</button>
            </div>
            <div class="shop__container__filterBar__priceRangeContainer__sliders mt-4">
                <input id="fromSlider" type="range" value="0" step="20" min="0" max="500"/>
                <input id="toSlider" type="range" value="500" step="20" min="0" max="500"/>
            </div>
            
        </div>
        </div>



        <div class="col-lg-9 col-md-12 shop__container__products mt-5 ">

          <div class="row  shop__container__products__list m-auto  ">
            <div class="shop__container__products__results col-12 mb-3 d-flex justify-content-between flex-wrap  align-items-center ps-5 pe-5 ">
              <p class="fs-6 m-0   fw-semibold  shop__container__products__results__number ">Affichage de <span id="startIndex"></span> - <span id="lastIndex"></span> sur <span id="totalProducts"></span> résultats</p>
              <select class="p-1   border-1 fw-light fs-6 shop__container__products__results__select " aria-label="Default select example">
                <option selected value="1" >Trier par : Défaut</option>
                <option value="2">Trier par : prix plus bas</option>
                <option value="3">Trier par :prix plus haut</option>
              </select>
              <button data-bs-toggle="modal" data-bs-target="#productFilterModal" class="btn btn-primary text-secondary  shop__container__products__results__select w-100 d-lg-none mt-3 fw-bold "><i class="fa-solid fa-sliders"></i> Filter</button>
              <div class="modal fade" id="productFilterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-shop__container__products__list__product__title title ">Filtrer</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                    <h2 class=" fs-6 fw-semibold mt-4 ">Catégorie</h2>
                        <hr class="border-primary border-2">
                        <ul class="list-group list-unstyled mt-2 shop__container__filterBar__list  ">
                          <li class="mt-2 text-dark fs-6">
                            <input class="form-check-input  me-1" type="checkbox" id="hairCheckbox" value="soin cheveux" >
                            Soin cheveux
                          </li>
                          <li class="mt-2 text-dark fs-6 ">
                            <input class="form-check-input  me-1" type="checkbox" value="gommage" >
                            Gommage
                          </li>
                          <li class="mt-2 text-dark fs-6">
                            <input class="form-check-input me-1" type="checkbox" value="savon" >
                            Savon
                          </li>
                          <li class="mt-2 text-dark fs-6">
                            <input class="form-check-input me-1" type="checkbox" value="huile" >
                            Huile
                          </li>
                          <li class="mt-2 text-dark fs-6">
                            <input class="form-check-input me-1" type="checkbox" value="shampoing" >
                            Shampoing
                          </li>
                        </ul>
                        <h2 class=" fs-6 fw-semibold  mt-5 ">État du produit</h2>
                        <hr class="border-primary border-2">
                        <ul class="list-group list-unstyled mt-2  ">
                          
                          <li class="mt-2 text-dark fs-6" >
                            <input class="form-check-input  me-1" type="checkbox" value="promotion" >
                            Promotion
                          </li>
                          <li class="mt-2 text-dark fs-6">
                            <input class="form-check-input me-1" type="checkbox" value="en stock" >
                            En stock
                          </li>
                        </ul>
                        <h2 class=" fs-6 fw-semibold  mt-5 ">Filtrer par prix</h2>
                        <hr class="border-primary border-2"> 
                        <div class="shop__container__filterBar__priceRangeContainer">
                                    <div class="shop__container__filterBar__priceRangeContainer__values">
                                      <div class="shop__container__filterBar__priceRangeContainer__values__value fs-6">
                                        Prix : 
                                        <input class="shop__container__filterBar__priceRangeContainer__values__value__minInput " type="number" id="fromInputMobile" value="0" min="0" max="500"/>dh
                                        -
                                        <input class="shop__container__filterBar__priceRangeContainer__values__value__maxInput" type="number" id="toInputMobile" value="500" min="0" max="500"/>
                                        dh
                                      </div>
                                      
                                    </div>
                                    <div class="shop__container__filterBar__priceRangeContainer__sliders mt-4">
                                        <input id="fromSliderMobile" type="range" value="0" step="20" min="0" max="500"/>
                                        <input id="toSliderMobile" type="range" value="500" step="20" min="0" max="500"/>
                                    </div>
                          </div>
                                  <div class="modal-footer">
                                    <button  type="button" id="priceFilterBtnMobile" data-bs-dismiss="modal" class="btn btn-primary text-secondary w-100 priceFilterBtn">Rechercher</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
            </div>
          </div>
            <div id="productsContainer" class="row">
              <div class="col-lg-5 col-md-6 col-10 m-auto product   mt-4 shop__container__products__list__product">
                <div class="card border-0  m-auto w-100" >
                  <a href="product.html" class="text-decoration-none text-dark">
                    <div class="ProductsImageContainers">
                      <img src="assets/img/homePage/featuredProducts/product4.jpg" class="img-fluid card-img-top ProductsImages shop__container__products__list__product__img object-fit-cover" alt="...">
                      <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                    </div>
                  <div class="card-body">
                    <div class="d-none shop__container__products__list__product__details d-none">
                      <span class="shop__container__products__list__product__details__categorie">savon</span>
                      <span class="shop__container__products__list__product__details__etat">promotion</span>
                    </div>
                    <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                    <p class="card-text text-center m-1 shop__container__products__list__product__title title">Parfum</p>
                    <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-10 m-auto product   mt-4 shop__container__products__list__product">
                <div class="card border-0  m-auto w-100" >
                  <a href="product.html" class="text-decoration-none text-dark">
                    <div class="ProductsImageContainers">
                      <img src="assets/img/homePage/featuredProducts/product1.jpg" class="img-fluid card-img-top ProductsImages shop__container__products__list__product__img object-fit-cover" alt="...">
                      <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                    </div>
                  <div class="card-body">
                    <div class="d-none shop__container__products__list__product__details d-none">
                      <span class="shop__container__products__list__product__details__categorie">soin cheveux</span>
                      <span class="shop__container__products__list__product__details__etat">promotion</span>
                    </div>
                    <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                    <p class="card-text text-center m-1 shop__container__products__list__product__title title">Parfum</p>
                    <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-10 m-auto product   mt-4 shop__container__products__list__product">
                <div class="card border-0  m-auto w-100" >
                  <a href="product.html" class="text-decoration-none text-dark">
                    <div class="ProductsImageContainers">
                      <img src="assets/img/homePage/featuredProducts/product2.jpg" class="img-fluid card-img-top ProductsImages shop__container__products__list__product__img object-fit-cover" alt="...">
                      <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                    </div>
                  <div class="card-body">
                    <div class="d-none shop__container__products__list__product__details d-none">
                      <span class="shop__container__products__list__product__details__categorie">gommage</span>
                      <span class="shop__container__products__list__product__details__etat">promotion</span>
                    </div>
                    <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">80.00</span>dh</p>
                    <p class="card-text text-center m-1 shop__container__products__list__product__title title">Parfum</p>
                    <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-10 m-auto product   mt-4 shop__container__products__list__product">
                <div class="card border-0  m-auto w-100" >
                  <a href="product.html" class="text-decoration-none text-dark">
                    <div class="ProductsImageContainers">
                      <img src="assets/img/homePage/featuredProducts/product3.jpg" class="img-fluid card-img-top ProductsImages shop__container__products__list__product__img object-fit-cover" alt="...">
                      <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                    </div>
                  <div class="card-body">
                    <div class="d-none shop__container__products__list__product__details d-none">
                      <span class="shop__container__products__list__product__details__categorie">savon</span>
                      <span class="shop__container__products__list__product__details__etat">promotion</span>
                    </div>
                    <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">25.00</span>dh</p>
                    <p class="card-text text-center m-1 shop__container__products__list__product__title title">Parfum</p>
                    <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-10 m-auto product   mt-4 shop__container__products__list__product">
                <div class="card border-0  m-auto w-100" >
                  <a href="product.html" class="text-decoration-none text-dark">
                    <div class="ProductsImageContainers">
                      <img src="assets/img/homePage/featuredProducts/product4.jpg" class="img-fluid card-img-top ProductsImages shop__container__products__list__product__img object-fit-cover" alt="...">
                      <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                    </div>
                  <div class="card-body">
                    <div class="d-none shop__container__products__list__product__details d-none">
                      <span class="shop__container__products__list__product__details__categorie">huile</span>
                      <span class="shop__container__products__list__product__details__etat">promotion</span>
                    </div>
                    <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">150.00</span>dh</p>
                    <p class="card-text text-center m-1 shop__container__products__list__product__title title">Parfum</p>
                    <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-10 m-auto product   mt-4 shop__container__products__list__product">
                <div class="card border-0  m-auto w-100" >
                  <a href="product.html" class="text-decoration-none text-dark">
                    <div class="ProductsImageContainers">
                      <img src="assets/img/homePage/featuredProducts/product5.jpg" class="img-fluid card-img-top ProductsImages shop__container__products__list__product__img object-fit-cover" alt="...">
                      <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                    </div>
                  <div class="card-body">
                    <div class="d-none shop__container__products__list__product__details d-none">
                      <span class="shop__container__products__list__product__details__categorie">savon</span>
                      <span class="shop__container__products__list__product__details__etat">promotion</span>
                    </div>
                    <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                    <p class="card-text text-center m-1 shop__container__products__list__product__title title">Parfum</p>
                    <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                  </div>
                  </a>
                </div>
              </div>
            <div class="col-lg-5 col-md-6 col-10 m-auto product   mt-4 shop__container__products__list__product">
              <div class="card border-0  m-auto w-100" >
                <a href="product.html" class="text-decoration-none text-dark">
                  <div class="ProductsImageContainers">
                    <img src="assets/img/homePage/featuredProducts/product6.jpg" class="img-fluid card-img-top ProductsImages shop__container__products__list__product__img object-fit-cover" alt="...">
                    <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                  </div>
                <div class="card-body">
                  <div class="d-none shop__container__products__list__product__details d-none">
                    <span class="shop__container__products__list__product__details__categorie">soin cheveux</span>
                    <span class="shop__container__products__list__product__details__etat">promotion</span>
                  </div>
                  <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                  <p class="card-text text-center m-1 shop__container__products__list__product__title title">Parfum</p>
                  <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                </div>
                </a>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 col-10 mt-2 ">
              <div class="card border-0 m-auto w-100 ProductsCards" >
                <a href="product.html" class="text-decoration-none text-dark">
                <div class="ProductsImageContainers">
                  <img src="assets/img/homePage/featuredProducts/product7.jpg" class="img-fluid card-img-top ProductsImages" alt="...">
                  <button class="btn btn-primary   rounded-0 btn-lg fw-light text-secondary ProductsImagesBtns">DECOUVRIR</button>
                </div>
                <div class="card-body">
                  <div class=" d-none">
                    <span class="shop__container__products__list__product__details__categorie">huile</span>
                    <span class="shop__container__products__list__product__details__etat">promotion</span>
                  </div>
                  <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">300.00</span>dh</p>
                  <p class="card-text text-center m-1">Gel Douch</p>
                  <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i><i class="fa-solid m-1 fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary m-1"></i></p>
                </div>
                </a>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 m-auto product   col-10 mt-4 shop__container__products__list__product">
              <div class="card border-0  m-auto w-100" >
                <a href="product.html" class="text-decoration-none text-dark">
                <img src="assets/img/homePage/featuredProducts/product8.jpg" class="card-img-top shop__container__products__list__product__img object-fit-cover " alt="...">
                <div class="card-body">
                  <div class="d-none shop__container__products__list__product__details d-none">
                    <span class="shop__container__products__list__product__details__categorie">shampoing</span>
                    <span class="shop__container__products__list__product__details__etat">en stock</span>
                  </div>
                  <p class="card-text text-center m-1 fw-bolder"><span class="shop__container__products__list__product__price">270.00</span>dh</p>
                  <p class="card-text text-center m-1 shop__container__products__list__product__title title">Shampoing</p>
                  <p class="card-text text-center m-1"><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i><i class="fa-solid fa-star fa-xs text-primary "></i>  <span>52 Reviews</span></p>
                </div>
                </a>
              </div>
            </div>
            </div>
            
          </div>
             <!--pagination start-->
          <div class="container d-flex justify-content-center  p-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-lg  " id="pagination">
               
                </ul>
            </nav>
        </div>
          <!--pagination end-->
        </div>
      </div>
    </div>
    </div>



<!--footer start -->

<?php include('footer.php'); ?>


<!-- footer end -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/cart.js"></script>
  <script src="js/productsPagination.js"></script>
  <script src="js/explore.js"></script>
  <script src="js/scrollReveal.js"></script>
  <script src="js/productsFilter.js"></script>
  <script src="js/searchBar.js"></script>
  <script src="js/priceFilter.js"></script> 
  </body>
  </html>