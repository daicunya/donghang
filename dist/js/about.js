webpackJsonp([2],{

/***/ 32:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 4:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/**
 * Created by daicunya on 2018/1/31.
 */

__webpack_require__(32);
__webpack_require__(0);

var map = new BMap.Map("allMap");
var point = new BMap.Point(116.404, 39.915);
var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL});
map.centerAndZoom(point, 15);
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);               // 将标注添加到地图中
map.addControl(top_left_control);
map.addControl(top_left_navigation);
map.addControl(top_right_navigation);
marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

$(function () {
  $('.about-tab li').click(function () {
    $(this).addClass('on').siblings().removeClass('on');
  })
});


/***/ }),

/***/ 47:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(4);


/***/ })

},[47]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvcGFnZS9hYm91dC9pbmRleC5zdHlsIiwid2VicGFjazovLy8uL3NyYy9wYWdlL2Fib3V0L2luZGV4LmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7O0FBQUEseUM7Ozs7Ozs7O0FDQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQSw4Q0FBOEMsNkJBQTZCLEVBQUU7QUFDN0UsdURBQXVEO0FBQ3ZELHVEQUF1RCxtRUFBbUU7QUFDMUg7QUFDQSxvQ0FBb0M7QUFDcEMsdUJBQXVCO0FBQ3ZCO0FBQ0E7QUFDQTtBQUNBLDJDQUEyQzs7QUFFM0M7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNILENBQUMiLCJmaWxlIjoianMvYWJvdXQuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpblxuXG5cbi8vLy8vLy8vLy8vLy8vLy8vL1xuLy8gV0VCUEFDSyBGT09URVJcbi8vIC4vc3JjL3BhZ2UvYWJvdXQvaW5kZXguc3R5bFxuLy8gbW9kdWxlIGlkID0gMzJcbi8vIG1vZHVsZSBjaHVua3MgPSAyIiwiLyoqXG4gKiBDcmVhdGVkIGJ5IGRhaWN1bnlhIG9uIDIwMTgvMS8zMS5cbiAqL1xuJ3VzZSBzdHJpY3QnO1xucmVxdWlyZSgnLi9pbmRleC5zdHlsJyk7XG5yZXF1aXJlKCcuLi9jb21tb24vaW5kZXguanMnKTtcblxudmFyIG1hcCA9IG5ldyBCTWFwLk1hcChcImFsbE1hcFwiKTtcbnZhciBwb2ludCA9IG5ldyBCTWFwLlBvaW50KDExNi40MDQsIDM5LjkxNSk7XG52YXIgdG9wX2xlZnRfY29udHJvbCA9IG5ldyBCTWFwLlNjYWxlQ29udHJvbCh7YW5jaG9yOiBCTUFQX0FOQ0hPUl9UT1BfTEVGVH0pOy8vIOW3puS4iuinku+8jOa3u+WKoOavlOS+i+WwulxudmFyIHRvcF9sZWZ0X25hdmlnYXRpb24gPSBuZXcgQk1hcC5OYXZpZ2F0aW9uQ29udHJvbCgpOyAgLy/lt6bkuIrop5LvvIzmt7vliqDpu5jorqTnvKnmlL7lubPnp7vmjqfku7ZcbnZhciB0b3BfcmlnaHRfbmF2aWdhdGlvbiA9IG5ldyBCTWFwLk5hdmlnYXRpb25Db250cm9sKHthbmNob3I6IEJNQVBfQU5DSE9SX1RPUF9SSUdIVCwgdHlwZTogQk1BUF9OQVZJR0FUSU9OX0NPTlRST0xfU01BTEx9KTtcbm1hcC5jZW50ZXJBbmRab29tKHBvaW50LCAxNSk7XG52YXIgbWFya2VyID0gbmV3IEJNYXAuTWFya2VyKHBvaW50KTsgIC8vIOWIm+W7uuagh+azqFxubWFwLmFkZE92ZXJsYXkobWFya2VyKTsgICAgICAgICAgICAgICAvLyDlsIbmoIfms6jmt7vliqDliLDlnLDlm77kuK1cbm1hcC5hZGRDb250cm9sKHRvcF9sZWZ0X2NvbnRyb2wpO1xubWFwLmFkZENvbnRyb2wodG9wX2xlZnRfbmF2aWdhdGlvbik7XG5tYXAuYWRkQ29udHJvbCh0b3BfcmlnaHRfbmF2aWdhdGlvbik7XG5tYXJrZXIuc2V0QW5pbWF0aW9uKEJNQVBfQU5JTUFUSU9OX0JPVU5DRSk7IC8v6Lez5Yqo55qE5Yqo55S7XG5cbiQoZnVuY3Rpb24gKCkge1xuICAkKCcuYWJvdXQtdGFiIGxpJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgICQodGhpcykuYWRkQ2xhc3MoJ29uJykuc2libGluZ3MoKS5yZW1vdmVDbGFzcygnb24nKTtcbiAgfSlcbn0pO1xuXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9zcmMvcGFnZS9hYm91dC9pbmRleC5qc1xuLy8gbW9kdWxlIGlkID0gNFxuLy8gbW9kdWxlIGNodW5rcyA9IDIiXSwic291cmNlUm9vdCI6IiJ9