$(document).ready(function(){

const $burger = $('.hamburger');
const $nav = $('.nav');
const mainPhoto = $('.mystory__section-photo');
const mainImg = $('.mystory__section-img');
const btn = document.querySelector('.scrolltop-btn');

$burger.on('click', function () {
$('.hamburger, .nav__list').toggleClass('nav__list-active');
  $nav.css("opacity","1");
})


jQuery(document).ready(function($){
  var offset = 100;
  var speed = 250;
  var duration = 500;
      $(window).scroll(function(){
          if ($(this).scrollTop() < offset) {
                    $('.scrolltop-btn') .fadeOut(duration);
          } else {
                    $('.scrolltop-btn') .fadeIn(duration);
          }
      });
   $('.scrolltop-btn').on('click', function(){
          $('html, body').animate({scrollTop:0}, speed);
          return false;
          });
});



$(function(){
	$('.mystory__section-photo img:gt(0)').hide();
	setInterval(function(){$('.mystory__section-photo :first-child').fadeOut(500).next('img').fadeIn(500).end().appendTo('.mystory__section-photo');}, 4000);
});

function sbiResize() {
  setTimeout(function(){
    jQuery('.sbi').each(function() {
      jQuery(this).find('.sbi_photo').css('height', jQuery(this).find('.sbi_photo').eq(0).innerWidth() );
    });
  }, 501);
}sbiResize();

jQuery(window).resize(function(){
  sbiResize();
});

});