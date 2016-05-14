// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

$(document).ready(function() {
  var visota = $("#footer").height();
  $("#footer-position").height(visota);
  $("#empty").height(visota);


  $('.modal').click(function(event) {
    $('.modal-window-bg, .modal-window-contact').fadeIn('400');
  });

  $('.modal-window-bg').click(function(event) {
    $('.modal-window-bg, .modal-window-buy, .modal-window-contact').fadeOut('400');
  });

  $('.modal-window .close').click(function(event) {
    $('.modal-window-bg, .modal-window-buy, .modal-window-contact').fadeOut('400');
  });

  $('.button-zakaz').click(function(event) {
    event.preventDefault();
    var quantity = $('.quantity').val();
    $('.modal-window-buy .sstitle').html(window.title);
    $('.modal-window-buy .ssquantity').html(quantity);
    $('.modal-window-buy .ssprice').html(window.price);
    $('.modal-window-buy .sspriceall').html(window.price * quantity);

    $('.modal-window-buy .title input').val(window.title);
    $('.modal-window-buy .link input').val(window.url);
    $('.modal-window-buy .ids input').val(window.id);
    $('.modal-window-buy .price input').val(window.price);
    $('.modal-window-buy .priceall input').val(window.price * quantity);

    $('.modal-window-bg, .modal-window-buy').fadeIn('400');
  });

});


