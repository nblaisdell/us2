// JUSTIN'S JS

// show dropdown menu
$('.top-nav').on('click', 'li', function() {
    $(this).find('ul').toggle();
});

// Header script
$('.top-nav').on('click', 'a', function() {
    $('.active').removeClass('active');
    $(this).addClass('active');
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

// keep search bar expanded on click
$('.top-search').on('click', function() {
    $(this).css('width', '225px');
});




// NATHAN'S JS

// WYSIWYG editor - http://codepen.io/trhino/pen/xyLAu
// $(function() {
//   $('#editControls a').click(function(e) {
//     switch($(this).data('role')) {
//       case 'h1':
//       case 'h2':
//       case 'p':
//         document.execCommand('formatBlock', false, $(this).data('role'));
//         break;
//       default:
//         document.execCommand($(this).data('role'), false, null);
//         break;
//     }
//   });
// });

function delay_blog(){
    window.location = "../javascriptredirect.php"
}