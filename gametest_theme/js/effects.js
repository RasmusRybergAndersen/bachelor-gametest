window.onload = function () {
    jQuery('.forside-slider').slick({
        draggable: true,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        fade: true,
        speed: 4000,
        infinite: true

    });

    jQuery('.subheader-slider').slick({
        draggable: true,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        fade: true,
        speed: 4000,
        infinite: true

    });

 

    function resizeHeaderOnScroll() {
        const distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 200,
        headerEl = document.getElementById('header');
        
        if (distanceY > shrinkOn) {
          headerEl.classList.add("smaller");
        } else {
          headerEl.classList.remove("smaller");
        }
      }
      
      window.addEventListener('scroll', resizeHeaderOnScroll);
      



}
