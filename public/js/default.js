$(document).ready(function(){
    $('img.zoomable').css({cursor: 'pointer'}).live('click', function () {
    var img = $(this);
    var bigImg = $('<img />').css({
      'max-width': '70%',
      'max-height': '90%',
      'display': 'inline',
      'margin-top':'20px'
    });
    bigImg.attr({
      src: img.attr('src'),
      alt: img.attr('alt'),
      title: img.attr('title')
    });
    var over = $('<div />').text(' ').css({
      'height': '100%',
      'width': '100%',
      'background': 'rgba(0,0,0,.82)',
      'position': 'fixed',
      'top': 0,
      'left': 0,
      'opacity': 0.0,
      'cursor': 'pointer',
      'z-index': 9999,
      'text-align': 'center'
    }).append(bigImg).bind('click', function () {
      $(this).fadeOut(300, function () {
        $(this).remove();
      });
    }).insertAfter(this).animate({
      'opacity': 1
    }, 300);
  });
});
