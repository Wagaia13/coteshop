<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Primary Meta Tags -->
  <title>Robe | Cote shop</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Accueil | HayCroos">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <!-- les css -->
  <link rel="stylesheet" href="assets/sass/styles.css" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">
</head>

<body class="home body">
  <div id="content-global">
    <!-- en-tête -->
    <?php include 'header.php'; ?>
    <!-- corps du site -->
    <main id="main">

      <div class="container-fluid">

        <div class="row">
          <div class="col-md-2 hide-mobile filter-right">
            <div class="section-filter">
              <div class="d-flex justify-content-between align-items-center">
                <span class="section-filter--title">Catégories</span>
                <span class="icon-cross_more close d-block d-xl-none"></span>
              </div>
              <div class="card">
                <article class="filter-group">

                  <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="collapsed">
                    <header class="card-header">
                      <span class="title">ENFANT</span>
                      <i class="icon-control fa fa-chevron-down"></i>
                    </header>
                  </a>

                  <div class="filter-content collapse" id="collapse_1">
                    <div class="card-body">

                      <ul class="list-menu">
                        <li><a href="#">People </a></li>
                        <li><a href="#">Watches </a></li>
                        <li><a href="#">Cinema </a></li>
                        <li><a href="#">Clothes </a></li>
                        <li><a href="#">Home items </a></li>
                        <li><a href="#">Animals</a></li>
                        <li><a href="#">People </a></li>
                      </ul>

                    </div> <!-- card-body.// -->
                  </div>
                </article> <!-- filter-group  .// -->
                <article class="filter-group">

                  <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                    <header class="card-header">
                      <span class="title" style="color:#FF7A00">FEMME</span>
                      <i class="icon-control fa fa-chevron-down"></i>
                    </header>
                  </a>

                  <div class="filter-content collapse show" id="collapse_2" style="">
                    <div class="card-body">

                      <ul class="list-menu">
                        <li><a href="#" style="color:#FF7A00">ROBES </a></li>
                        <li><a href="#">TEE-SHIRT </a></li>
                        <li><a href="#">JEANS</a></li>
                        <li><a href="#">LUNETTES</a></li>
                        <li><a href="#">BRACELETS</a></li>
                        <li><a href="#">CHAUSSURES</a></li>
                        <li><a href="#">SACS</a></li>
                      </ul>

                    </div> <!-- card-body.// -->
                  </div>
                </article> <!-- filter-group  .// -->
                <article class="filter-group">

                  <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="collapsed">
                    <header class="card-header">
                      <span class="title">HOMME</span>
                      <i class="icon-control fa fa-chevron-down"></i>
                    </header>
                  </a>

                  <div class="filter-content collapse" id="collapse_3" style="">
                    <div class="card-body">

                      <ul class="list-menu">
                        <li><a href="#">TEE-SHIRT </a></li>
                        <li><a href="#">JEANS</a></li>
                        <li><a href="#">LUNETTES</a></li>
                        <li><a href="#">CHAUSSURES</a></li>
                      </ul>

                    </div> <!-- card-body.// -->
                  </div>
                </article> <!-- filter-group  .// -->
                <article class="filter-group">

                  <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="collapsed">
                    <header class="card-header">
                      <span class="title" style="font-weight:400;text-transform: uppercase;">Stock de l’année</span>
                      <i class="icon-control fa fa-chevron-down"></i>
                    </header>
                  </a>

                  <div class="filter-content collapse" id="collapse_4" style="">
                    <div class="card-body">

                      <ul class="list-menu">
                        <li><a href="#">type-1 </a></li>
                        <li><a href="#">type-2</a></li>
                        <li><a href="#">type-3</a></li>
                        <li><a href="#">type-4</a></li>
                      </ul>

                    </div> <!-- card-body.// -->
                  </div>
                </article> <!-- filter-group  .// -->
                <article class="filter-group">

                  <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="true" class="collapsed">
                    <header class="card-header">
                      <span class="title" style="font-weight:400;text-transform: uppercase;">Destockage</span>
                      <i class="icon-control fa fa-chevron-down"></i>
                    </header>
                  </a>

                  <div class="filter-content collapse" id="collapse_5" style="">
                    <div class="card-body">

                      <ul class="list-menu">
                        <li><a href="#">type-1 </a></li>
                        <li><a href="#">type-2</a></li>
                        <li><a href="#">type-3</a></li>
                        <li><a href="#">type-4</a></li>
                      </ul>

                    </div> <!-- card-body.// -->
                  </div>
                </article> <!-- filter-group  .// -->
              </div>
              <span class="section-filter--title">Trier par</span>

              <ul class="list-menu section-filter--more">
                <li><a href="#"><strong>Nouveautés</strong> </a></li>
                <li><a href="#">Prix croissant</a></li>
                <li><a href="#">Prix décroissant</a></li>
              </ul>

            </div> <!-- card.// -->



          </div>

          <div class="col-md-10 show-mobile list-product">
            <div class="sect-bd-cat">
              <div class="d-xl-none d-block category-more-container">
                <a href="#" data-toggler='_toggler' data-target='.hide-mobile'>
                  <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 14C11.3118 14 12.4269 14.8419 12.8345 16.0149L12.8834 16.0067L13 16H19C19.5523 16 20 16.4477 20 17C20 17.5128 19.614 17.9355 19.1166 17.9933L19 18H13C12.9435 18 12.888 17.9952 12.834 17.9863C12.4269 19.1581 11.3118 20 10 20C8.68818 20 7.57311 19.1581 7.16546 17.9851L7.11663 17.9933L7.00001 18H1.00001C0.447686 18 7.08444e-06 17.5523 7.08444e-06 17C7.08444e-06 16.4872 0.386043 16.0645 0.883364 16.0067L0.999993 16H6.99999C7.05649 16 7.11202 16.0047 7.16601 16.0137C7.57308 14.8419 8.68818 14 10 14V14ZM10 16C9.44768 16 9 16.4477 9 17C9 17.5523 9.44768 18 10 18C10.5523 18 11 17.5523 11 17C11 16.4477 10.5523 16 10 16ZM3.00001 7C4.31179 7 5.4269 7.84193 5.83454 9.01493L5.88337 9.0067L6 9H19C19.5523 9 20 9.44768 20 10C20 10.5128 19.614 10.9355 19.1166 10.9933L19 11H6.00001C5.94351 11 5.88799 10.9952 5.834 10.9863C5.42693 12.1581 4.31182 13 3 13C1.34318 13 0 11.6568 0 9.99999C0 8.34317 1.34318 6.99999 3 6.99999L3.00001 7ZM3.00001 9C2.44768 9 2.00001 9.44768 2.00001 10C2.00001 10.5523 2.44768 11 3.00001 11C3.55233 11 4.00001 10.5523 4.00001 10C4.00001 9.44768 3.55233 9 3.00001 9ZM14 0C15.3118 0 16.4269 0.841928 16.8345 2.01493L16.8834 2.0067L17 2H19C19.5523 2 20 2.44768 20 3C20 3.51282 19.614 3.93554 19.1166 3.99329L19 3.99998H17C16.9435 3.99998 16.888 3.99524 16.834 3.98631C16.4269 5.15806 15.3118 5.99999 14 5.99999C12.6882 5.99999 11.5731 5.15806 11.1655 3.98506L11.1166 3.99329L11 3.99999H1.00001C0.447686 3.99999 7.08444e-06 3.55231 7.08444e-06 2.99999C7.08444e-06 2.48717 0.386043 2.06445 0.883364 2.0067L0.999993 2.00001H11C11.0565 2.00001 11.112 2.00475 11.166 2.01368C11.5731 0.841929 12.6882 0 14 0V0ZM14 2C13.4477 2 13 2.44768 13 3C13 3.55232 13.4477 4 14 4C14.5523 4 15 3.55232 15 3C15 2.44768 14.5523 2 14 2Z" fill="black" />
                    </svg></span>
                </a>
              </div>
              <h1>Robes</h1>
              <div class="text-left">
                <a href="" class="btn btn-custom btn-custom--noir btn-custom--thin btn-outline-secondary">Longue</a>
                <a href="" class="btn btn-custom btn-custom--noir btn-custom--thin btn-outline-secondary">Midi</a>
                <a href="" class="btn btn-custom btn-custom--noir btn-custom--thin btn-outline-secondary">Courte</a>
                <a href="" class="btn btn-custom btn-custom--noir btn-custom--thin btn-outline-secondary">denim</a>
              </div>

            </div>

            <div class="sect-prdt">
              <div class="row mb-5 mt-5">
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-1.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-2.png" class="card-img img-fluid" alt=""></a>
                  <div class="text-promo" alt="">10%</div>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"> <img src="assets/img/imag-3.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-1.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-2.png" class="card-img img-fluid" alt=""></a>
                  <div class="text-promo" alt="">10%</div>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                  </div>

                </div>


              </div>

              <div class="row mb-5 mt-5">
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-3.png" class="card-img img-fluid" alt="">
                  </a>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-4.png" class="card-img img-fluid" alt="">
                  </a>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-5.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-3.png" class="card-img img-fluid" alt="">
                  </a>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-5.png" class="card-img img-fluid" alt="">
                  </a>
                  <div class="text-promo" alt="">10%</div>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                  </div>

                </div>


              </div>

              <div class="row mb-5 mt-5">
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-1.png" class="card-img img-fluid" alt="">
                  </a>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"> <img src="assets/img/imag-2.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"> <img src="assets/img/imag-3.png" class="card-img img-fluid" alt=""></a>
                  <div class="text-promo" alt="">10%</div>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-1.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-2.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>


              </div>

              <div class="row mb-5 mt-5">
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-3.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-4.png" class="card-img img-fluid" alt=""></a>
                  <div class="text-promo" alt="">10%</div>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"> <img src="assets/img/imag-5.png" class="card-img img-fluid" alt=""></a>

                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>

                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-3.png" class="card-img img-fluid" alt="">
                  </a>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir"> 128,99€</span>
                  </div>

                </div>
                <div class="col-md-2 col-half-offset mt-2">
                  <a href="/single-product.php"><img src="assets/img/imag-5.png" class="card-img img-fluid" alt=""></a>
                  <div class="text-promo" alt="">10%</div>
                  <div class="text-center">
                    <p class="mb-0">Nom de la marque</p>
                    <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                    <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                  </div>

                </div>


              </div>

              <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Page précedente</a>
                  </li>
                  <li class="page-item-num"><a href="#"><strong>1</strong></a></li>
                  <li class="page-item-num"><a href="#">2</a></li>
                  <li class="page-item-num"><a href="#">3</a></li>
                  <li class="page-item-num"><a href="#">...</a></li>
                  <li class="page-item-num"><a href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Page suivante</a>
                  </li>
                </ul>
              </nav>
              <nav aria-label="Page navigation">
                <ul class="pagination mobile justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><img src="assets/img/arrow-left-pagination.svg" alt=""></a>
                  </li>
                  <li class="page-item-num active"><a href="#"><strong>1</strong></a></li>
                  <li class="page-item-num"><a href="#">2</a></li>
                  <li class="page-item-num"><a href="#">3</a></li>
                  <li class="page-item-num"><a href="#">...</a></li>
                  <li class="page-item-num"><a href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><img src="assets/img/arrow-right-pagination.svg" alt=""></a>
                  </li>
                </ul>
              </nav>

            </div>
          </div>
        </div>

      </div>

    </main>

    <!-- footer du site -->

    <?php
    include 'footer.php';
    ?>


  </div>

  <!-- scriptdu site -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/js/sticky.js"></script>
</body>

</html>