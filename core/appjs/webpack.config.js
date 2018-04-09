const path = require('path');

module.exports = {
    entry: {
        app: './src/index.js'
    },
    output: {
        path: path.resolve(__dirname, 'build'),
        filename: 'app.min.js'
    },
    module: {
        rules : [{
                test: /\.js/,
                exclude: /node_module/,
                loader: 'babel-loader',
                query: {
                    presets: ['react', 'env']
                }
        }]
    }
}