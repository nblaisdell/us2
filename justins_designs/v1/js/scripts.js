
// Header script
$('.top-nav').on('click', 'li', function() {
  $(this).find('ul').toggle();
});

// Image cycle script
$('.img-wrap').on('click', function() {
  $(this).find('.img-text').slideToggle();
});

// content box nav script
$('.container').find('nav').on('click', 'a', function() {
  $('.active').removeClass('active');
  $(this).addClass('active');
});
