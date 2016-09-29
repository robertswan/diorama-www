(function() {
  var body = $('body');
  $('.menu_toggle').bind('click', function() {
    body.toggleClass('menu_open');
    return false;
  });

  $("#menuImg").click(function() {
    var _this = $(this);
    var current = _this.attr("src");
    var swap = _this.attr("data-swap");
   _this.attr('src', swap).attr("data-swap",current);
  });
})();
