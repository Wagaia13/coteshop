<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Primary Meta Tags -->
    <title>article | Cote shop</title>
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
       <div class="container content-page-ctc">
         <div class="row mt-5 mb-5 d-flex align-items-center flex-wrap margintop-5">
           <div class="col-md-6 pr-5 justify-content-start">
             <h3 class="mb-3">Eget auctor libero, egestas quis quam tellus vestibulum suspendisse</h3>
             <p>Mauris sodales eu gravida habitasse dis. At sapien metus venenatis scelerisque ac ac vulputate urna. Quis pellentesque tortor faucibus velit, diam faucibus magna nec morbi. Fringilla elit egestas lorem in condimentum turpis malesuada massa at. Amet lobortis ultricies blandit sed viverra sed neque, bibendum. Id pharetra a, risus volutpat pulvinar. Cras donec et sagittis hendrerit massa commodo risus. </p>
             <p>Turpis rhoncus facilisi eget morbi lectus amet scelerisque. Quis ornare dolor felis aliquam mauris vitae amet metus. Quis neque id viverra ullamcorper. Scelerisque amet ultrices laoreet porta amet facilisis. Libero facilisis aliquet pharetra, imperdiet enim mattis. Eu dolor vitae, amet tincidunt et tellus aliquam. Egestas nascetur enim vulputate vestibulum.</p>
           </div>
           <div class="col-md-6 d-flex justify-content-end">
             <img src="assets/img/img-par-defaut.jpg" class="fadeInRight">

           </div>


         </div>

         <div class="row mt-5 mb-5 d-flex align-items-center flex-wrap">
           <div class="col-md-6 d-flex justify-content-start">
             <img src="assets/img/img-par-defaut.jpg" class="fadeInleft">

           </div>
           <div class="col-md-6 pl-5 d-flex justify-content-end flex-wrap">
             <h3 class="mb-3">Eget auctor libero, egestas quis quam tellus vestibulum suspendisse</h3>
             <p>Mauris sodales eu gravida habitasse dis. At sapien metus venenatis scelerisque ac ac vulputate urna. Quis pellentesque tortor faucibus velit, diam faucibus magna nec morbi. Fringilla elit egestas lorem in condimentum turpis malesuada massa at. Amet lobortis ultricies blandit sed viverra sed neque, bibendum. Id pharetra a, risus volutpat pulvinar. Cras donec et sagittis hendrerit massa commodo risus. </p>
             <p>Turpis rhoncus facilisi eget morbi lectus amet scelerisque. Quis ornare dolor felis aliquam mauris vitae amet metus. Quis neque id viverra ullamcorper. Scelerisque amet ultrices laoreet porta amet facilisis. Libero facilisis aliquet pharetra, imperdiet enim mattis. Eu dolor vitae, amet tincidunt et tellus aliquam. Egestas nascetur enim vulputate vestibulum.</p>
           </div>

         </div>

         <div class="row mt-5">
           <div class="col-md-12">
             <h3 class="mb-3 text-center mt-4 pl-5 pr-5">Eget auctor libero, egestas quis quam tellus vestibulum suspendisse</h3>
             <p class="text-center mb-5">Mauris sodales eu gravida habitasse dis. At sapien metus venenatis scelerisque ac ac vulputate urna. Quis pellentesque tortor faucibus velit, diam faucibus magna nec morbi. Fringilla elit egestas lorem in condimentum turpis malesuada massa at. Amet lobortis ultricies blandit sed viverra sed neque, bibendum. Id pharetra a, risus volutpat pulvinar. Cras donec et sagittis hendrerit massa commodo risus. </p>
           </div>

         </div>

       </div>

       <div class="full-width">
          <div class="row mt-5 mb-5 d-flex align-items-center flex-wrap">
           <div class="col-md-4 mr-0 ml-0 pr-0 pl-0">
             <img src="assets/img/rectangle-67.jpg">

           </div>
           <div class="col-md-4 mr-0 ml-0 pr-0 pl-0">
             <img src="assets/img/rectangle-68.jpg">

           </div>
           <div class="col-md-4 mr-0 ml-0 pr-0 pl-0">
            <img src="assets/img/rectangle-69.jpg">

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
    <script type="text/javascript" src="assets/js/custom.js"></script>
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