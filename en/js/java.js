/// logos - home
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});


/// klikbare dropdown parent - header
$(document).ready(function() {
    function bindNavbar() {
      if ($(window).width() > 768) {
        $('.navbar-default .dropdown').on('mouseover', function(){
          $('.dropdown-toggle', this).next('.dropdown-menu').show();
        }).on('mouseout', function(){
          $('.dropdown-toggle', this).next('.dropdown-menu').hide();
        });
         
        $('.dropdown-toggle').click(function() {
          if ($(this).next('.dropdown-menu').is(':visible')) {
            window.location = $(this).attr('href');
          }
        });
      }
      else {
        $('.navbar-default .dropdown').off('mouseover').off('mouseout');
      }
    }
     
    $(window).resize(function() {
      bindNavbar();
    });
     
    bindNavbar();
  });

// dropdown subsectie - header
window.addEventListener("hashchange", function() { scrollBy(0, -100) })

// navigatie active class
$(function() {
  var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
  $(".navbar ul li a").each(function(){
       if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
       $(this).addClass("active");
  })  
}); 


$('body').delegate('.navbar ul li a', 'click', function(e) {
  var $this = $(this);
  var $item = $(this).parent().find('ul.dropdown-menu');
  var $subCount = $item.length;
  if($subCount === 0){
      $this.tab("show");
      $this.parents('ul').find('li.active').removeClass('active');
      $this.parents('li').addClass('active');
      $item.addClass('active');
  }
});

// Slide naar boven
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
      $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 300);
});






