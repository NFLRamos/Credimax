$( document ).ready(function() {
    var open = 0;
    function navControl(e){
        if(open == 0){
            $('.sidebar').addClass('sidebarOpen');
            $('.openbtn').addClass('d-none');
            $('body').css("overflow", "hidden");
            open = 1;
        }else if(open == 1 || e.key === "Escape"){
                $('.sidebar').removeClass('sidebarOpen');
                $('.openbtn').removeClass('d-none');
                $('body').css("overflow", "auto");
                open = 0;
            }
    }
    $(".openbtn").on('click', function() { navControl(); });
    $(".closebtn").on('click', function(){ navControl(); });
    $(document).on('keyup', function() { if(open == 1) { navControl(); } });


    $('.slider_partners').slick({
      dots: false,
      infinite: true,
      arrows: false,
      //centerMode: false,
      //centerPadding: '0px',
      //speed: 300,
      slidesToShow: 7,
		slidesToScroll: 1,
	  autoplay: true,
      autoplaySpeed: 4000,

      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false,
		    	  autoplay: true,
           autoplaySpeed: 4000,
          }
        },
        {
            breakpoint: 600,
            settings: {
            //centerMode: false,
            autoplay: true,
            autoplaySpeed: 4000,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
            breakpoint: 480,
            settings: {
            //centerMode: false,
            autoplay: true,
            autoplaySpeed: 4000,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    });


    $('.slider_depoi').slick({
      swipeToSlide: true,
      dots: false,
      infinite: true,
      arrows: false,
      //centerMode: false,
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToShow: 1,  
    });

    $('.slider_team').slick({
      swipeToSlide: true,
      dots: false,
      infinite: true,
      arrows: false,
      centerMode: false,
      autoplay:true,
      autoplaySpeed: 2000,
      slidesToShow: 4,  
    });



});  

$(document).scroll(function () {
  var wsize = $( window ).width();
  var y = $(document).scrollTop(),
  header = $(".stickyheader");

  if(wsize >= 768) {
      if (y > 150) {
        header.addClass('bg-dark-blue position-fixed shadow-lg');
        header.removeClass('position-absolute');
      } else {
        header.removeClass('bg-dark-blue position-fixed shadow-lg');
        header.addClass('position-absolute');
      }
    }
});

$(document).scroll(function (){
  // Get the element
let topBtn = document.querySelector(".top-btn");

// On Click, Scroll to the page's top, replace 'smooth' with 'auto' if you don't want smooth scrolling
topBtn.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });

// On scroll, Show/Hide the btn with animation
window.onscroll = () => window.scrollY > 1000 ? topBtn.style.opacity = 1 : topBtn.style.opacity = 0

});
