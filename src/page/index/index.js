/**
 * Created by daicunya on 2018/1/20.
 */
'use strict';

require('./index.styl');
require('../common/index.js');

$(function () {
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30
  });
});
