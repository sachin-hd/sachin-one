<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Multiplication</title>
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
<style>

*{
  margin: 0;
  padding: 0;
  
  
}
@media screen and (max-width: 900px){
  .calculate {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
 
  .calculate button{
    margin: 20px !important;
  }
  .headin {
    margin-bottom: 20px !important;
  }

  .animate{
    animation: none !important;
  }
}
/*body{
  background-color: #eee;
}*/

.headin{
  display: flex;
  justify-content: center;
  margin-bottom: 80px;
  font-family: Arial,sans-serif,Helvetica;
}
.container{
  
  
  padding: 50px;
}
.calculate{
  display: flex;
  justify-content: center;
   font-family: Arial,sans-serif,Helvetica;
}

.resultDiv{
  padding: 30px;
  display: flex;
  flex-direction: row;
  justify-content: center;

} 

.result{
  text-align: right;
  display: flex;
  flex-direction: column;
  
}

.animate{ 
  transition: opacity 1s ease-in-out;
  transition: translateX 1s ease-in-out;
   font-family: Arial,sans-serif,Helvetica;
  animation: fadeInRight 1s ease-in-out ;

}
 .heading  h1{
  font-size: 3rem;
  animation: fadeInRight 1s ease-in-out ;
}

.calculate input{
  padding: 5px 20px;
  margin: 0 20px;
  border: 2px solid #444;
  outline: none;
  font-size: 1.2rem;
  
}

.calculate label{
  font-size: 1.2rem;
  line-height: 2rem;
}

.calculate button{
  outline: none;
  cursor: pointer;
  border:none ;
  margin: 0 10px;
  padding: 5px 20px;
  font-size: 1.2rem;
  background-color: green;
  color: #fff;
}

hr{
  margin: 0;
}
.button2{
  background-color: red !important;
}


@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(200px);
  }
  to {
    opacity: 1;
  }
}</style>

  <meta name="theme-color" content="#fafafa">
  
</head>
 
<body>
<div class="container-full col-lg-12 col-md-12  col-sm-12 col-xs-12"> 
  <?php include './includes/top.php' ?>  
 <?php include './includes/js__profile.php' ?>  
<?php include './javascript-content/multiplication-content.php' ?>
<div class="content row ">
<?php include './includes/footer.php' ?>
</div>
</div>
</div>






  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
<script>


  
  
  $(".hero__pages__websites__c").addClass("hero__pages__active");


</script>
</body>

</html>
