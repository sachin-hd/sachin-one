<!doctype html>
<html class="no-js" lang="">

<head> 
  <meta charset="utf-8">
  <title>SACHIN's WEBSITE</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
<link rel="icon" href="favicon.ico">

  <link rel="stylesheet" href="css/style.css">




  <meta name="theme-color" content="#fafafa">
  
</head>

<body>
<div class="container-full col-lg-12 col-md-12  col-sm-12 col-xs-12">
   <?php include './includes/top.php' ?> 
  <?php include './includes/photos__profile.php' ?>  
<?php include './includes/photos.php' ?>
<div class="content row ">
<?php include './includes/footer.php' ?>

</div>


<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="script/script.js"></script>
<script>let landscape = document.querySelector('.photo__nav__landscape');
let portrait = document.querySelector('.photo__nav__portrait');
let allphotos = document.querySelectorAll('img.lozad');


landscape.addEventListener('click', function(){
   allphotos.forEach(el=>el.classList.add('landscape--images'));
   console.log(allphotos);
});

portrait.addEventListener('click', function(){
   allphotos.forEach(el=>el.classList.remove('landscape--images'));
   console.log(allphotos);
});</script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();
</script>
 <script>
      $(".hero__pages__photos__c").addClass("hero__pages__active");
    </script>
</body>

</html>
