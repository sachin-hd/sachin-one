<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style type="text/css">
		
		.single-button{
			   outline: none;
    font-size: 18px;
    border-radius: 1000px;
    font-family: Helvetica, sans-serif,Arial;
    padding: 15px 20px;
    margin: 0 10px;
    color: #FFF;
    font-weight: bold;
     
    cursor: pointer;
    text-decoration: none;
    
		}

.single-button--back{
background-color: #2ed573;

}
.single-button--back:hover{
background-color:	#1B8848 !important;
}

.single-button--videos{
	background-color: #FF6C47;
}
.single-button--videos:hover{
	background-color: #a94025;
}


iframe{
			max-width: 100%; 
			padding: 14px;
			box-sizing: border-box;
		}
		.btn-box{
			display: block;
			padding: 50px;

		}


	</style>
</head>
<body>
	<div class="content row single-vid" style="text-align: center; width: 100%;">
	 <div class="btn-box">
	 	<a href="index#videos" class="single-button single-button--back">GO Back</a>
	 <a href="videos" class="single-button single-button--videos" >View All</a>
	 </div>
	 

	<iframe width="560" height="315" 
				src="https://www.youtube.com/embed/hCot0gmpKIk?showinfo=1&modestbranding=1&rel=0&enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true"  allowscriptaccess="always"></iframe>
</div> 
</body>
</html>