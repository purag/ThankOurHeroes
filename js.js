
$(functionn(){
  $(window).on("scroll", function(){
    if($(window).scrollTop()>='340'){
      $("body")
        .css("background-attachment","fixed")
        .children("hgroup")
          .addClass("fx")
        .end()
        .children("#content")
          .css("margin-top","410px");
    } else if ($(window).scrollTop()<='340'){
      $("body")
        .css("background-attachment","scroll")
        .children("hgroup")
          .removeClass("fx")
        .end()
        .children("#content")
          .css("margin-top","10px");
    }
  });

  $(".thank").mouseenter(function(){
    var $qbox = $(this).find(".qbox"),
	$name = $qbox.find(".name"),
	offset = $name.width() - $qbox.width() + 10;
    if( offset > 0 ){
      $name.animate({
          marginLeft: -offset
        }, offset * 30, 'swing', function(){
          $name.animate({
              marginLeft: 0
            }, offset * 30, 'swing', function(){
              $(this).trigger("mouseenter");
          });
      });
    }
  }).mouseleave(function(){
    var $name = $(this).find(".name");
    $name.stop(true).animate({
        marginLeft: 0
      }, 200, 'swing');
  });
});
