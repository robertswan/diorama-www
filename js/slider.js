jQuery(document).ready(function($) {

  var slideCount    = $("#slider ul li").length;
  var slideWidth    = $("#slider ul li").width();
  var slideHeight   = $("#slider ul li").height();
  var sliderULWidth = slideCount * slideWidth;

  $("#slider").css({
    width: slideWidth,
    height: slideHeight
  });

  $("#slider ul").css({
    width: sliderULWidth,
    marginLeft: -slideWidth
  });

  $("#slider ul li:last-child").prependTo("#slider ul");

  function moveLeft()
  {
    $("#slider ul").animate({
      left: + slideWidth
    }, 200, function() {
      $("#slider ul li:last-child").prependTo("#slider ul");
      $("#slider ul").css("left", "");
    });
  };

  function moveRight()
  {
    $('#slider ul').animate({
      left: - slideWidth
    }, 200, function () {
      $('#slider ul li:first-child').appendTo('#slider ul');
      $('#slider ul').css('left', '');
    });
  };

  $("a.ctrl_prev").click(function() {
    moveLeft();
  });

  $("a.ctrl_next").click(function() {
    moveRight();
  });

});
