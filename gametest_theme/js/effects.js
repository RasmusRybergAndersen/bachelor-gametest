$(function() {
var typed = new Typed('.type', {
  strings: ["Webudvikler.", "UX Desginer.", "Grafiker."],
  typeSpeed: 75,
  backSpeed: 65,
  startDelay: 800,
  loop: true,
  showCursor: true
});





$('.udtalelser-slick').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false
});
});