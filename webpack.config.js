var path = require('path');
var ManifestPlugin = require('webpack-manifest-plugin');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const themePath = './wp-content/themes/rigo';

module.exports = {
	entry: themePath+'/src/index.js',
	output: {
		publicPath: '/wp-content/themes/rigo/public/',
		path: path.resolve(__dirname, themePath+'/public'),
		filename: 'bundle.js'
	},
	module: {
    	rules: [{
	        test: /\.scss$/,
	        use: ExtractTextPlugin.extract({
	          fallback: 'style-loader',
	          use: ['css-loader', 'sass-loader']
	        })
	    },{
	    	test:/\.(jpg|png|svg)$/,
	    	use:[
	    		{
	    			loader:'file-loader',

			    }
	    	]
	    }
	    ]
	},
	devtool: "source-map",
  	devServer: {
	    contentBase:  './dist',
	    hot: true,
	    disableHostCheck: true,
	    historyApiFallback: true
  	},
    plugins: [
      new ManifestPlugin(),
      new ExtractTextPlugin("index.css")
    ]
};