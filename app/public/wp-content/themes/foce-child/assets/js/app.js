document.addEventListener("DOMContentLoaded", (event) => { // On attend que toute la page soit chargée 
	var s = skrollr.init();
	document.getElementById("showMenu").style.display = "none";	
	
	document.querySelector('.menu-toggle').addEventListener('click',function(){
		var x = document.getElementById("site-navigation");
		var menu = document.getElementById("showMenu");
		var menuToggle = document.querySelector(".menu-toggle");

		if(x.className === "main-navigation toggled") {
			menu.style.display = "block";
			menuToggle.classList.add("rotate");		
		}
		else {
			menu.style.display = "none";
			menuToggle.classList.remove("rotate");
		}
});
	



// Animation fade-in des sections
var sections = document.querySelectorAll("section");
if(sections) {
	window.addEventListener("scroll", function() {
		sections.forEach(function (section) {
			var sectionTop = section.getBoundingClientRect().top;  
			var windowHeight = window.innerHeight;  
			if (sectionTop < windowHeight * 0.8) {
				section.classList.add("anim");
			}
		});
	});
};


var h2Titles = document.querySelector("h2");
if(h2Titles) {
	window.addEventListener("scroll", function() {
		h2Titles.forEach(function (h2) {
			var sectionTop = section.getBoundingClientRect().top;  
			var windowHeight = window.innerHeight;  
			if (sectionTop < windowHeight * 0.8) {
				h2.classList.add("anim");
			}
			else {
				h2.classList.remove("anim");
			}
		});
	});
};


// //fonction de slide des titres
// function checkSlideH2() {
// 	slideH2.forEach(function (slide) {
// 	  var slideTop = slide.getBoundingClientRect().top;
  
// 	  var windowHeight = window.innerHeight;
  
// 	  if (slideTop < windowHeight * 0.8) {
// 		slide.classList.add("slide-in");
// 	  } else {
// 		slide.classList.remove("slide-in");
// 	  }
// 	});
//   }
  




// Animation menu pour appeler l'animation sur chaque lien qd le menu est ouvert en plein écran
window.addEventListener("load", function() {
	var reveals = document.querySelectorAll("a.animationDown");
	for (var i = 0; i < reveals.length; i++) {
		var windowHeight = window.innerHeight;
		var elementTop = reveals[i].getBoundingClientRect().top;
		var elementVisible = 2;
		if (elementTop < windowHeight - elementVisible) {
			reveals[i].classList.add("animationDownActivated");
		} else {
			reveals[i].classList.remove("animationDownActivated");
		}
	}	
});



// Hide full screen menu when a link is clicked
let linksMenu = document.querySelectorAll("a.link");
if(linksMenu) {
	linksMenu.forEach(linkMenu => {
		linkMenu.addEventListener('click',function(){
			document.getElementById('showMenu').style.display = "none";
		});
	});
}


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