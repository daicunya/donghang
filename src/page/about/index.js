/**
 * Created by daicunya on 2018/1/31.
 */
'use strict';
require('./index.styl');
require('../common/index.js');

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
