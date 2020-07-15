console.log("Desenvolvido com <3 por lucasalmeida.dev");

jQuery(function ($) {

  // Navigation
  $('.header__toggle').click((e) => {
    e.preventDefault();

    $('.header__toggle').toggleClass('active');
    $('.menu').toggleClass('active');
  });

  $('.menu-item-has-children').click((e) => {
    $(this).toggleClass('active');
    $(this).find('.sub-menu').slideToggle();
  });

});
