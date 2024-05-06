document.addEventListener("DOMContentLoaded", (event) => { // On attend que toute la page soit chargée 
	var s = skrollr.init();
	document.getElementById("showMenu").style.display = "none";
	
	
	document.querySelector('.menu-toggle').addEventListener('click',function(){
		var x = document.getElementById("site-navigation");
		var menu = document.getElementById("showMenu");
		var menuToggle = document.querySelector(".menu-toggle");

		// var line1 = document.getElementById("Line1");
		// var line2 = document.getElementById("Line2");
		// var line3 = document.getElementById("Line3");

		if(x.className === "main-navigation toggled") {
			menu.style.display = "block";
			menuToggle.classList.add("rotate");
			// line1.style.transform = "rotate(45deg)";
			// line2.style.display = "none";
			// line3.style.transform = "rotate(-45deg)";			
		}
		else {
			menu.style.display = "none";
			menuToggle.classList.remove("rotate");
			// line1.style.transform = "rotate(0)";
			// line2.style.display = "block";
			// line3.style.transform = "rotate(0)";
		}
	});


	

	let linksMenu = document.querySelectorAll("a.link");
	if(linksMenu) {
		linksMenu.forEach(linkMenu => {
			linkMenu.addEventListener('click',function(){
				document.getElementById('showMenu').style.display = "none";
			});	
		});
	}





	// Appel initial pour vérifier les éléments visibles lors du chargement de la page
	//toggleAnimClass();


// function animClouds() {
// 	var clouds = document.querySelector('.big_cloud_container');
// 	clouds.forEach(function(elem) {
// 	  if (isInViewport(elem)) {
// 		elem.classList.add('clouds');
// 	  } else {
// 		elem.classList.remove('clouds');
// 	  }
// 	});	
// }




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
		  _pos    = _ths.offset().top,
		  _scroll = _win.scrollTop(),
		  _height = _win.height();
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













  
  

