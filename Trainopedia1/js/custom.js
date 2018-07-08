(function($) {

  // Navigation scrolls
  $(".navbar-nav li a").on('click', function(event) {
    $('.navbar-nav li').removeClass('active');
    $(this).closest('li').addClass('active');
    var $anchor = $(this);
    var nav = $($anchor.attr('href'));
    if (nav.length) {
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1500, 'easeInOutExpo');

      event.preventDefault();
    }
  });
  $(".navbar-collapse a").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  // Add smooth scrolling to all links in navbar
  $("a.mouse-hover, a.get-quote").on('click', function(event) {
    var hash = this.hash;
    if (hash) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, 'easeInOutExpo');
    }
  });
})(jQuery);











$('ul.pagination').on('click', 'a', function() { // listen for click on pagination link
  if($(this).hasClass('active')) return false;

  var active_elm = $('ul.pagination a.active');

  if(this.id == 'next'){
    var _next = active_elm.parent().next().children('a');
    if($(_next).attr('id') == 'next') {

      // appending next button if reach end
      var num = parseInt($('a.active').text())+1;
      active_elm.removeClass('active');
      $('<li><a class="active" href="#">'+num+'</a></li>').insertBefore($('#next').parent());

      $('#prev').parent().next().remove();
      return; 
    }
    _next.addClass('active');   




  }
  else if(this.id == 'prev') {
    var _prev = active_elm.parent().prev().children('a');



    if($(_prev).attr('id') == 'prev') {
      var num = parseInt($('a.active').text()) - 1;
      active_elm.removeClass('active');
      _prev = $('<li><a class="active" href="#">'+num+'</a></li>').insertAfter($('#prev').parent());

      $('#next').parent().prev().remove();

    };
    _prev.addClass('active');   

  } else {
    $(this).addClass('active');
  }
  active_elm.removeClass('active');

});






/*--Read More--*/

$(document).ready(function () {
    $('.nav-toggle').click(function () {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function () {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('<button class="btn btn-info">Read More</button>');
            } else {
                toggle_switch.html('<button class="btn btn-info">Read Less</button>');
            }
        });
    });

});
/*--Read More--*/


















