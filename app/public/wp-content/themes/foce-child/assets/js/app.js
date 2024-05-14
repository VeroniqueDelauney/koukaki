document.addEventListener("DOMContentLoaded", (event) => { // On attend que toute la page soit chargée 
	document.getElementById("showMenu").style.display = "none";	
	
	document.querySelector('.menu-toggle').addEventListener('click',function() {
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
				var coef = 0;
				if (window.innerWidth >= 480) {
					coef = 0.8;
				}
				else
				{
					coef = 1.2;
				}				
				if (sectionTop < windowHeight * coef) {
					section.classList.add("anim");
				}
			});
		});
	};


	// Animation titres h2 et h3
	// var h2Titles = document.querySelectorAll(".animatedTitle");
	// if(h2Titles) {
	// 	window.addEventListener("scroll", function() {
	// 		h2Titles.forEach(function (div) {
	// 			var sectionTopH2 = div.getBoundingClientRect().top;  
	// 			var windowHeight = window.innerHeight;  
	// 			if (sectionTopH2 < windowHeight * 0.8) {
	// 				div.classList.add("anim");
	// 			}
	// 			else
	// 			{
	// 				div.classList.remove("anim");
	// 			}
	// 		});
	// 	});
	// };


	// Animation nuages
	// var clouds = document.querySelectorAll(".clouds");
	// if(clouds) {
	// 	window.addEventListener("scroll", function() {
	// 		clouds.forEach(function (div) {
	// 			var sectionTopH2 = div.getBoundingClientRect().top;  
	// 			var windowHeight = window.innerHeight;  
	// 			if (sectionTopH2 < windowHeight * 0.8) {
	// 				div.classList.add("anim");
	// 			}
	// 			else
	// 			{
	// 				div.classList.remove("anim");
	// 			}
	// 		});
	// 	});
	// };

	
	// Fonction pour l'animation des titres h2 et des nuages
	function toggleAnimClass(selecteur) {
		var selecteurs = document.querySelectorAll(selecteur);
		if(selecteurs) {
			window.addEventListener("scroll", function() {
				selecteurs.forEach(function (div) {
					var sectionTop = div.getBoundingClientRect().top;  
					var windowHeight = window.innerHeight;  
					if (sectionTop < windowHeight * 0.8) {
						div.classList.add("anim");
					}
					else
					{
						div.classList.remove("anim");
					}
				});
			});
		};
	}
	toggleAnimClass(".clouds");
	toggleAnimClass(".animatedTitle");


	// Cacher le menu plein écran qd un lien a été cliqué
	let linksMenu = document.querySelectorAll("a.animationDown");
	if(linksMenu) {
		linksMenu.forEach(linkMenu => {
			linkMenu.addEventListener("click",function(){
				document.querySelector(".main-navigation").classList.remove("toggled");
				document.querySelector(".menu-toggle").classList.remove("rotate");
				document.querySelector(".menu-toggle").setAttribute("aria-expanded", false);
				document.getElementById("showMenu").style.display = "none";
			});
		});
	}


	// Animation personnages
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
			slideShadows: false
		},
		pagination: {
			el: ".swiper-pagination",
		},
	});
});