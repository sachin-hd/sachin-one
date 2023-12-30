<div class="container">


  <div class="headin"><h1>MULTIPLICATION</h1></div>
  <div class="calculate"><label for="">Number One</label>
  <input type="number" id="number1" autocomplete="off" class="num1" required="required">
  <label for="">Number Two</label>
  <input type="number" class="num2" autocomplete="off" id="number2" required="required">
  <button  class="button1">Submit</button>
  <button class="button2" >Reset</button>
</div>
  

  <div class="resultDiv"><h1 class="result"></h1></div>


  <div class="result"></div>
</div>
  

  <script>
    
    function demo(){
      /*alert("Started");*/
      let resultBox=document.querySelector(".result");
      let numOneBox= document.querySelector(".num1");
      let numTwoBox= document.querySelector(".num2");
      let btn=document.querySelector(".button1");
      let btn2=document.querySelector(".button2");
      /*let num1=numOneBox.value;
      let num2=numTwoBox.value;*/
      btn.onclick= function(){

        let num1=numOneBox.value;
        let num2=numTwoBox.value;
        // let result=multiply(num1,num2);

      //second code
      let{result,steps}=multiply(num1,num2);
      
      let html= gethtml(num1,num2,steps)

      resultBox.innerHTML=html+`<div class="animate"><hr/>${result}</div>`;

        //resultBox.innerText=result;
      }

      btn2.onclick=function(){
        numOneBox.value="";
        numTwoBox.value="";

        resultBox.innerText="";
      }
    }

    function multiply(num1,num2){
      let steps=[]
      for(let i=num1.length-1,zeros=0;i>=0;i--,zeros++){
        
        let digit=parseInt(num1[i]);
        let val=(10**zeros).toString();
        let step=val.length>1 ? Array.from(val.slice(1)):[]
        let resStr='00';
        /*let step=[];*/

        for(let j=num2.length-1;j>=0;j--){

          /*let carry=0;*/
          let res=digit* parseInt(num2[j])+parseInt(resStr[0]);
          resStr= res.toString().padStart(2,0);
          step.unshift(resStr[1]);
        }
        step.unshift(resStr[0]);
        steps.push(step);
        // console.log(step);
      }
      //return add(steps);

      return { result : add(steps),steps}
    }

    
    function add(steps){
      //First code
      /*let total=0;
      for (let step of steps){
        let n=parseInt(step.join(''));
        total+=n;
      }
      return total;*/
      //Second code
      return steps.map(step=>parseInt(step.join("")))
      .reduce((a,b)=>a+b);


    }

    function gethtml(num1,num2,steps){
      let html=`<div class="animate"> ${num1}</div>
           <div class="animate">${num2}</div><hr/>`;
      return steps.reduce((acc,step)=>`<div class="animate">${acc+step.join("")}</div>`,html)
    }

    window.onload=demo;

  </script>

<div class="content row">
  <div class="content__blog col-md-12 col-sm-12 col-xs-12">
    <div class="content__blog__block">
     
      <div class="content__blog__block__box">
        <p class="content__blog__block__p"> Demo function</p>
  <textarea disabled> 
    function demo(){
      let resultBox=document.querySelector(".result");
      let numOneBox= document.querySelector(".num1");
      let numTwoBox= document.querySelector(".num2");
      let btn=document.querySelector(".button1");
      let btn2=document.querySelector(".button2");

      btn.onclick= function(){
        let num1=numOneBox.value;
        let num2=numTwoBox.value;
        //First code
        // let result=multiply(num1,num2);

        //Second code
        let{result,steps}=multiply(num1,num2);
        let html= gethtml(num1,num2,steps)
        resultBox.innerHTML=html+`<div class="animate"><hr/>${result}</div>`; 
      }

      //reset function
      btn2.onclick=function(){
        numOneBox.value="";
        numTwoBox.value="";
        resultBox.innerText="";
      }
    } </textarea>
    <p class="content__blog__block__p">Multiply function</p>
    <textarea disabled>

      //Multiply Function
    function multiply(num1,num2){
      let steps=[]
      
        for(let i=num1.length-1,zeros=0;i>=0;i--,zeros++){
        let digit=parseInt(num1[i]);
        let val=(10**zeros).toString();
        let step=val.length>1 ? Array.from(val.slice(1)):[]
        let resStr='00'

        for(let j=num2.length-1;j>=0;j--){
          let res=digit* parseInt(num2[j])+parseInt(resStr[0]);
          resStr= res.toString().padStart(2,0);
          step.unshift(resStr[1]);
        }
        step.unshift(resStr[0]);
        steps.push(step);
      }
      return { result : add(steps),steps}
    }

    </textarea>
    <p class="content__blog__block__p">Add function</p>
    <textarea disabled>function add(steps){
      //First code
      /*let total=0;
      for (let step of steps){
        let n=parseInt(step.join(''));
        total+=n;
      }
      return total;*/
      //Second code
      return steps.map(step=>parseInt(step.join("")))
      .reduce((a,b)=>a+b);


    }

    function gethtml(num1,num2,steps){
      let html=`<div class="animate"> ${num1}</div>
           <div class="animate">${num2}</div><hr/>`;
      return steps.reduce((acc,step)=>`<div class="animate">${acc+step.join("")}</div>`,html)
    }

    window.onload=demo;</textarea>
    <p class="content__blog__block__p">HTML code</p>
    <textarea disabled><div class="container">

      <!--HTML CODES-->
  <div class="headin"><h1>MULTIPLICATION</h1></div>
  <div class="calculate"><label for="">Number One</label>
  <input type="number" id="number1" autocomplete="off" class="num1" required="required">
  <label for="">Number Two</label>
  <input type="number" class="num2" autocomplete="off" id="number2" required="required">
  <button  class="button1">Submit</button>
  <button class="button2" >Reset</button>
</div>
  

  <div class="resultDiv"><h1 class="result"></h1></div>


  <div class="result"></div>
</div>
  
</textarea>
  </div>
</div>
</div>
</div>
  

  <div class="back"><a href="javascript.php">go back</a></div>    