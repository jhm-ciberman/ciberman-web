// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'public/app.js')
   .postCss("src/app.css", "public/app.css", [
      require("tailwindcss"),
   ]);