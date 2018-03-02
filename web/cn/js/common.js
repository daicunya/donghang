/**
 * Created by daicunya on 2018/2/28.
 */
$(function () {
  //  侧边栏
  $('.side-bar li').mousemove(function () {
    $('.side-bar li').children('div').hide();
    $(this).children('div').show();
  }).mouseout(function () {
    $(this).children('div').hide();
  });
  //小火箭置顶
  $('.side-arrow').click(function () {
    $('html,body').animate({scrollTop:0},'slow');
  });
})