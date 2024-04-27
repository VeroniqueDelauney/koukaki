document.addEventListener("DOMContentLoaded", (event) => { // On attend que toute la page soit chargée 
	var s = skrollr.init();

	// Appel initial pour vérifier les éléments visibles lors du chargement de la page
	//toggleAnimClass();


	var swiper = new Swiper(".mySwiper", {
		effect: "coverflow",
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: "auto",
		coverflowEffect: {
		  rotate: 50,
		  stretch: 0,
		  depth: 100,
		  modifier: 1,
		  slideShadows: true,
		},
		pagination: {
		  el: ".swiper-pagination",
		},
	  });

});






$(window).scroll(function() {
	$('.toAnim').each(function() {
  
	  var _win     = $(window),
		  _ths     = $(this),
		  _pos    = _ths.offset().top, // définit le haut de l'écran
		  _scroll = _win.scrollTop(), // définit le haut de la page entière
		  _height = _win.height(); // hauteur du browser
  
		  console.log("Valeur de _pos : " + _pos);
		  console.log("Valeur de _scroll : " + _scroll);

	  (_scroll > _pos - _height * .7) ? _ths.addClass('anim') : _ths.removeClass('anim');
  
	});

});






// // Fonction pour vérifier si un élément est dans le viewport
// function isInViewport(elem) {
// 	var bounding = elem.getBoundingClientRect();
// 	return (
// 	  bounding.top >= 0 &&
// 	  bounding.left >= 0 &&
// 	  bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
// 	  bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
// 	);
//   }
  
//   // Fonction pour ajouter ou enlever la classe "anim" en fonction de la visibilité dans le viewport
//   function toggleAnimClass() {
// 	var elements = document.querySelectorAll('.toAnim');
// 	elements.forEach(function(elem) {
// 		console.log(isInViewport(elem));
// 	  if (isInViewport(elem)) {
// 		elem.classList.add('anim');
// 	  } else {
// 		elem.classList.remove('anim');
// 	  }
// 	});
//   }
  
//   // Écouteur d'événement pour vérifier lorsque la fenêtre est scrollée ou redimensionnée
//   window.addEventListener('scroll', toggleAnimClass);
//   window.addEventListener('resize', toggleAnimClass);
  
