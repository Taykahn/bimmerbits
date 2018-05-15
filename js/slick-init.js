jQuery(document).ready(function($){
 $('.slider-for').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
 slidesToShow: 1,
 slidesToScroll: '-1',
 asNavFor: '.slider-for',
 dots: true,
 centerMode: true,
 focusOnSelect: true,
 arrows: true,
 centerPadding: '280px', 
 autoplay: true, 
 autoplaySpeed: 0, 
 speed: 9000, 
 cssEase: 'linear',
  variablewidth: true
 });
});