/**
 * Created by daicunya on 2018/1/30.
 */
'use strict';
require('./index.styl');
require('../common/index.js');

$(function () {
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    slidesPerView: 2,
    // centeredSlides: true,
    paginationClickable: true,
    spaceBetween: 30,
    freeMode: true
  });
});