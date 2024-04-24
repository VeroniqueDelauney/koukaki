document.addEventListener("DOMContentLoaded", (event) => {
	var s = skrollr.init();
});



$(window).scroll(function() {
	$('.toAnim').each(function() {
  
	  var _win     = $(window),
		  _ths     = $(this),
		  _pos    = _ths.offset().top,
		  _scroll = _win.scrollTop(),
		  _height = _win.height();
  
	  (_scroll > _pos - _height * .7) ? _ths.addClass('anim') : _ths.removeClass('anim');
  
	});
  });