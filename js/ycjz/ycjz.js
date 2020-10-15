$("#app ul li").hover(function () {
  $(this).addClass('on').siblings().removeClass('on');
});








// 五大牙齿矫正术
$("#pichuan .partener").mouseenter(function () {

  $(this).find("div").css("color", "#f6910d");
  $(this).find("img").delay(200).stop().clearQueue().animate({
    borderRadius: "20",
    opacity: 1
  }, "fast")
  $(this).find(".pichuan_bgc").css('opacity', '.7')


}).mouseleave(function () {
  $(this).find("div").css("color", "#70a8e3");
  $(this).find("img").delay(200).stop().clearQueue().animate({
    borderRadius: "60",
    opacity: 0.9
  }, "fast")
  $(this).find(".pichuan_bgc").css('opacity', '0')

})


$(".partener").click(function () {
  var index = $(this).index()
  $(".parinforma").eq(index).slideDown("normal");
})


$("#teamcont .closebtn").mouseenter(function () {

  $(this).css({
    'background': 'url(../../image/ycjz/close-s.png)'
  });
}).mouseleave(function () {
  $(this).css({
    'background': 'url(../../image/ycjz/close-n.png)'
  });
})
$("#teamcont .closebtn").click(function () {
  $(".parinforma").slideUp();
  $("#pichuan").show();
})









// 专业牙科8重保障 swiper
var _index5 = 0
$("#four_flash .but_right img").click(function () {
  _index5++
  var len = $(".flashBg ul.mobile li").length
  if (_index5 + 5 > len) {
    $("#four_flash .flashBg ul.mobile").stop().append($("ul.mobile").html())
  }
  $("#four_flash .flashBg ul.mobile")
    .stop()
    .animate({
      left: -_index5 * 326
    }, 1000)
})

$("#four_flash .but_left img").click(function () {
  if (_index5 == 0) {
    $("ul.mobile").prepend($("ul.mobile").html())
    $("ul.mobile").css("left", "-1380px")
    _index5 = 6
  }
  _index5--
  $("#four_flash .flashBg ul.mobile")
    .stop()
    .animate({
      left: -_index5 * 326
    }, 1000)
})


// 正畸新选择 美颜轻松有
$(function () {
  $(".well-item").hover(
    function () {
      console.log(1)
      $(this).find(".correct").children().removeClass()
      $(this).find(".opposite").children().removeClass()
      $(this).find(".correct").children().addClass("test")
      $(this).find(".opposite").children().addClass("test2")
    },
    function () {
      $(this).find(".correct").children().removeClass()
      $(this).find(".opposite").children().removeClass()
      $(this).find(".correct").children().addClass("test2")
      $(this).find(".opposite").children().addClass("test")
    }
  )

})