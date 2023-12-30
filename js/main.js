window.onload = (event) => {

let popDiv = document.querySelector('.popup-wrapper')
let close = document.querySelector('.close');

close.addEventListener('click', function(){
  close.classList.add('hide-popup');

popDiv.classList.add('hide-popup');
})

};