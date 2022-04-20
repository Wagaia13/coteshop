<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Primary Meta Tags -->
    <title>produit | Cote shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Accueil | HayCroos">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- les css -->
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    <link rel="stylesheet" href="assets/sass/styles.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">
  </head>
  <body class="home body">
    <div id="content-global">
      <!-- en-tête -->
     <?php include 'header.php';?>


      <!-- corps du site -->
      <main id="main">
        <div class="single-product">
          <div class="mb-3">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="card">
                            <ul id="lightSlider" class="mb-3">
                                <li data-thumb="assets/img/img-produit.jpg"> <img src="assets/img/img-produit.jpg" /> </li>
                                 <li data-thumb="assets/img/img-produit.jpg"> <img src="assets/img/img-produit.jpg" /> </li>
                                
                            </ul>
                 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="infos">
                        <div class="about"> <span class="font-weight-bold">Nom de la marque</span>
                            <h2>Nom du produit</h2>
                            <div class="text-promo" alt="">10%</div>
                            <span class="font-weight-bold text-decoration-underline">128,99€</span>
                            <span class="font-weight-bold text-orange">128,99€</span>
                        </div>
                        <div class="mt-4 mb-4">
                                <p>Eu bibendum vel quis purus. Velit magna orci non, rhoncus. Arcu posuere proin tellus egestas senectus dictum. Eget non pellentesque sit gravida. Tellus lacus a ac nibh donec commodo mauris. Et tempus mollis mauris gravida.</p>
                                <p>
                                Neque risus diam nec dolor aenean sodales lacus ullamcorper. Sed enim, tincidunt nibh pellentesque aliquam volutpat cursus luctus. Vitae nisi, pharetra et vel congue vestibulum, fames et ultrices. Ac fermentum nunc arcu arcu arcu nunc dis risus.
                                </p>
                             
                            </div>
                     
                        <div class="product-description">
                            <div><span class="color-sect font-weight-bold">Couleur</span></div>

                            <div class="my-color"> 
                             <!--   
                              <label class="radio orange"> <input type="radio" name="" value="" class="checked-on" checked> <span class="orange"></span> </label> 
                              <label class="radio noir"> <input type="radio" name="" value="" class="checked-off"> <span class="noir"></span> </label> 
                            <label class="radio gris"> <input type="radio" name="" value="" class="checked-off"> <span class="gris"></span> </label> 
                            -->
                            <label class="radio orange"> <input type="radio" name="color" value="orange" class="checked-active" checked> 
                            <span class="orange"></span> 
                            </label> 
                            <label class="radio noir"> 
                                <input type="radio" name="color" value="noir"><span class="noir"></span>
                            </label> 
                            <label class="radio gris"> 
                            <input type="radio" name="color" value="gris"><span class="gris"></span>
                            </label>

                            </div>

                            <div class="sizes mt-4">
                               <span class="color-sect font-weight-bold mb-2"> Taille</span><div></div><br> 
                                <label class="radio"> <input type="radio" name="size" value="S" checked class="checked-active-tl"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label>
                            </div>

                            <div class="quantity mt-4">
                              <span class="color-sect font-weight-bold mb-2"> Quantité</span>
                               <form id='myform' method='POST' class='quantity mt-3' action='#'>
                                  <input type='button' value='' class='qtyminus minus' field='quantity' />
                                  
                                  <input type='text' name='quantity' value='0' class='qty' />

                              <input type='button' value='' class='qtyplus plus' field='quantity' />
                                  
                              </form>
                            </div>
                           
                             <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Ajouter au panier</button></div>
                          
                      
                        </div>
                             
                    </div>
                  
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid mt-5">
          
          <div class="sect-prdt">
             <h2 class="title-more pt-4 pb-4">Vous aimeriez aussi</h2>
            <div class="row mb-2 mt-2">
                            <div class="col-md-2 col-half-offset- mt-2">
                                    <a href="#"><img src="assets/img/imag-4.png" class="card-img img-fluid" alt=""></a>
                              
                                    <div class="text-center">
                                         <p class="mb-0">Nom de la marque</p>
                                        <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                                        <span>à partir de </span><span class=""> 128,99€</span>
                                    </div>
                         
                            </div>
                            <div class="col-md-2 col-half-offset- mt-2">
                                    <a href="#"><img src="assets/img/imag-5.png" class="card-img img-fluid" alt=""></a>
                                    <div class="text-promo-" alt="">10%</div>
                                  
                                    <div class="text-center">
                                        <p class="mb-0">Nom de la marque</p>
                                        <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                                        <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                                    </div>
                         
                            </div>

                            <div class="col-md-2 col-half-offset- mt-2">
                                   <a href="#"> <img src="assets/img/imag-6.png" class="card-img img-fluid" alt=""></a>
                              
                                    <div class="text-center">
                                         <p class="mb-0">Nom de la marque</p>
                                        <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                                        <span>à partir de </span><span class=""> 128,99€</span>
                                    </div>
                         
                            </div>

                            <div class="col-md-2 col-half-offset- mt-2">
                                    <a href="#"><img src="assets/img/imag-5.png" class="card-img img-fluid" alt=""></a>
                              
                                    <div class="text-center">
                                         <p class="mb-0">Nom de la marque</p>
                                        <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                                        <span>à partir de </span><span class=""> 128,99€</span>
                                    </div>
                         
                            </div>
                            <div class="col-md-2 col-half-offset- mt-2">
                                    <a href="#"><img src="assets/img/imag-4.png" class="card-img img-fluid" alt=""></a>
                                     <div class="text-promo-" alt="">10%</div>
                                    <div class="text-center">
                                         <p class="mb-0">Nom de la marque</p>
                                        <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                                        <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                                    </div>
                         
                            </div>
                            <div class="col-md-2 col-half-offset- mt-2">
                                    <a href="#"><img src="assets/img/imag-2.png" class="card-img img-fluid" alt=""></a>
                                     <div class="text-promo-" alt="">10%</div>
                                    <div class="text-center">
                                         <p class="mb-0">Nom de la marque</p>
                                        <h5 class="mb-0 font-weight-semibold">Nom du produit</h5>
                                        <span>à partir de </span><span class="sect-prdt--colornoir" style="font-size:10px !important;text-decoration:line-through ;"> 128,99€</span><span class="sect-prdt--color"> 128,99€</span>
                                    </div>
                         
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
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
    <script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
</script>
<script type="text/javascript">
  jQuery(document).ready(($) => {
        $('.quantity').on('click', '.plus', function(e) {
            let $input = $(this).prev('input.qty');
            let val = parseInt($input.val());
            $input.val( val+1 ).change();
        });
 
        $('.quantity').on('click', '.minus', 
            function(e) {
            let $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            if (val > 0) {
                $input.val( val-1 ).change();
            } 
        });
    });
</script>
  </body>
</html>