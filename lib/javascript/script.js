///makes the nav apear and disapear
  function toggleSidebar(){
   //classlist accessing an element's list of classes
    document.getElementById("sidebar").classList.toggle('active');
    document.getElementById("content-container").classList.toggle('pushed');
  }
  $(document).ready(function(){
    $('.banner').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  });
