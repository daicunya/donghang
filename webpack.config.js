const webpack            = require('webpack');
const path               = require('path');
const ExtractTextPlugin  = require('extract-text-webpack-plugin');
const HtmlWebpackPlugin  = require('html-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');

//环境变量配置
const WEBPACK_ENV = process.env.WEBPACK_ENV || 'dev';

const getHtmlConfig = function (name, title) {
  return {
    template : './src/view/'+ name + '.html',
    filename : './'+ name + '.html',
    inject   : true,
    hash     : true,
    title    : title,
    chunks   : ['common',name]
  }
};
const config = {
  entry: {
    'common'  : ['./src/page/common/index.js'],
    'index'   : ['./src/page/index/index.js'],
    'details' : ['./src/page/details/index.js'],
    'about'   : ['./src/page/about/index.js'],
  },
  output: {
    path: __dirname + '/dist/',
    publicPath : 'dev' === WEBPACK_ENV ? '/dist/' : '/',
    filename: 'js/[name].js'
  },
  //externals:外部依赖的声明
  externals : {
    'jquery': 'window.jQuery'
  },
  devtool: 'inline-source-map',
  module: {
   loaders: [
     { test: /\.css$/, use: ['style-loader','css-loader']},
     { test: /\.styl$/, use:  ExtractTextPlugin.extract({ fallback: 'style-loader', use: ['css-loader','stylus-loader'] })},
     { test: /\.(gif|png|jpg|woff|svg|eot|ttf)\??.*$/, loader: 'url-loader?limit=5000&name=resource/[name].[ext]'},
   ]
  },
  resolve : {
    alias: {
      node_modules  : __dirname + '/node_modules',
      util          : __dirname + '/src/util',
      page          : __dirname + '/src/page',
      images        : __dirname + '/images'
    }
  },
  plugins: [
    // new CleanWebpackPlugin(['dist']),
    //  独立通用模块到js/common.js
    new webpack.optimize.CommonsChunkPlugin({
      name: 'common',
      filename: 'js/common.js'
    }),
    new ExtractTextPlugin("css/[name].css"),
    //  HTML模板处理
    new HtmlWebpackPlugin(getHtmlConfig('index','首页')),
    new HtmlWebpackPlugin(getHtmlConfig('details','详情页')),
    new HtmlWebpackPlugin(getHtmlConfig('about','关于我们'))
  ]
};
if ('dev' === WEBPACK_ENV) {
  config.entry.common.push('webpack-dev-server/client?http://localhost:8000/');
}
module.exports = config;