var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    nav: true,
    navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    autoplay:true,
    autoHeight : true,
    autoplayTimeout:1700,
    autoplayHoverPause:true,
    responsiveClass: true,
      responsive:{
          0:{
              items: 2,
          },
          600:{
              items: 3,
          },
          1200:{
              items: 5
          }
      }
});