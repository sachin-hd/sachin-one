<!-- <button onclick="showDailog()">Click Me</button> -->
		<h1 class="title">Increment/Decrement</h1>

	<section class="container_js">
		<button class="btn_js" onclick="setval(2)">+/- add 2</button>
		<button class="btn_js" onclick="setval(3)">+/- add 3</button>




	
	<button  class="btn_js" onclick="calc(1)" >Increment 	<span style="font-size:
	20px; color: #43A047;">&#9650;</span></button> 
	<button class="btn_js"  onclick="calc
	(-1)" >Decrement <span style="font-size:
	20px; color: #FF3D00;">&#9660;</span></button>

	<button  class="btn_js" onclick="reset()"  style="background-color: #ff3d00; color:#fff;">Reset</button>

	
	</section>
	<div class="result "><h2 class="oddeven"></h2><h1 class="result_div">0</h1></div>

	<script>
		/*function showDailog(){
			alert(" button is Clicked")
		}*/
		
		

		/*function inc(){
		
		let h1 = document.querySelector("h1");
		h1.innerText=++num;
		
		

		}

		function dec(){
		
		let h1 = document.querySelector("h1");
		h1.innerText=--num;
		if(num<0){
			num=0;
		}
		}*/


		let num=0;
		let val=1
let h1 = document.querySelector(".result_div");
let h2 = document.querySelector(".oddeven");
		function calc(sign){
			
			
			num+=val*sign;
			h1.innerText=num;

			if(num%2!==0){
				h2.innerText=`ODD`;

			}else{
				h2.innerText=``;
			}
		}

		function setval(v){
			val =v;
		}

		function reset(){
	
		
			num=0;
			val=1;
			h1.innerText="0";
			h2.innerText="";
		}


		

	</script>

		<div class="back"><a href="javascript.php">go back</a></div> 