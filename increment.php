<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Incremet/Decrement</title>
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
    .btn_js{
          margin: 10px;
    padding: 10px; 
    border: none;
    min-width: 70px;
    font-family: monospace,Arial,sans-serif;
    cursor: pointer;
    background-color: #444;
    color: #fff;
    }
    
    .btn_js:hover{
      background-color: #aaa;
      color: #fff;
    }


    @media screen and (max-width: 900px){
      .container_js{
        flex-direction: column;
      }
      .result{
        flex-direction: column;
        align-items: center;
      }
      .result h2{
        min-height: 80px;
      }
    }
    .container_js{
    display: flex;
      background-color: #ebebeb;
      margin-top: 100px;
      width: 100%;
      background-color: #222;
      box-sizing: border-box;
      justify-content: center;
      align-content: center;
    }

    .result{
      background-color: #444;
    display: flex;
    justify-content: center;
    padding: 20px;
    margin-bottom: 200px;
    }
    .result h1{
      min-height: 44px;
    }
    .result h1,.title{
          background-color: #ebebeb;
    padding: 10px 20px;
    min-width: 300px;
    text-align: center;
    border-radius: 20px;
    font-family: monospace,Arial,sans-serif;
    color: #444;
    }
.title{
  border-radius: 0px;
    background-color: #ebebeb; 
    margin: 0;
}
    .result h2{
  line-height: 80px;
  margin-right: 10px;
  background-color: #eee;  
    padding: 10px 20px;
      min-width: 50px;
    text-align: center;
    border-radius: 20px;
    font-family: monospace,Arial,sans-serif;
    color: #FF3D00;
    }
  </style>


  <meta name="theme-color" content="#fafafa">
  
</head>
 
<body>
<div class="container-full col-lg-12 col-md-12  col-sm-12 col-xs-12"> 
  <?php include './includes/top.php' ?>  
 <?php include './includes/js__profile.php' ?>  
<?php include './javascript-content/increment-content.php' ?>
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
