



$( document ).ready(function() {

console.log("Testing");

   let hamburger = document.querySelector('.hamburger');
   let menu = document.querySelector('.resp-menu');

  

   hamburger.addEventListener("click", function() {
  menu.classList.toggle('show-menu');
     console.log(hamburger); 
});

$("html").on("contextmenu",function(e){
   return false;
});




 function openv(e) {
e.preventDefault();
$('html').css('overflow', 'hidden');
var id = $(this).attr('data-div'); // take the id to "highlight"

$('#'+ id).addClass('is-visible');
$('.content__modal--root').addClass('visible');

}







function blank(e){
	 e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    return false;
}

 function close() {

$('html').css('overflow', 'scroll');

$('.content__modal__video').removeClass('is-visible');
$('.content__modal--root').removeClass('visible');
}

function stopvideo(e) {
e.preventDefault();

jQuery("iframe").each(function() {
jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
});
}

$('.content__videos__embed__link').on( "click", openv );


$( '.content__modal__photo__close').on( "click", close );
$( '.content__modal__photo__close').on( "click", stopvideo );

$( '.content__modal--root').on( "click", stopvideo );
$( '.content__modal__video').on( "click", blank );
$( '.content__modal__photo').on( "click", blank );

window.onload = (event) => {

let popDiv = document.querySelector('.popup-wrapper')
let close = document.querySelector('.close');

close.addEventListener('click', function(){
  close.classList.add('hide-popup');

popDiv.classList.add('hide-popup');
})

};


});