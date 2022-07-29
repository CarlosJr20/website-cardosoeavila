jQuery(function(){
	


  responsividadeNav();
  $(window).scroll(function(){
		responsividadeNav();
	});

	 var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      slideToClickedSlide: true,
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;

});

function responsividadeNav(){
  if($(window).scrollTop() > 50){
      $('nav.navbar').addClass('minima');
  }else{
      $('nav.navbar').removeClass('minima');
  }
}