const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

// Front End
mix.styles(
    [
        "resources/css/bootstrap.min.css",
        "resources/css/materialdesignicons.min.css",
        "resources/css/unicons.css",
        "resources/css/magnific-popup.css",
        "resources/css/flexslider.css",
        "resources/css/owl.carousel.min.css",
        "resources/css/owl.theme.default.min.css",
        "resources/css/swiper.min.css",
        "resources/css/style.css",
        "resources/css/default.css"
    ],
    "public/css/front.css"
);

mix.scripts(
    [
        "resources/js/jquery-3.5.1.min.js",
        "resources/js/bootstrap.bundle.min.js",
        "resources/js/jquery.easing.min.js",
        "resources/js/scrollspy.min.js",
        "resources/js/owl.carousel.min.js",
        "resources/js/owl.init.js",
        "resources/js/swiper.min.js",
        "resources/js/swiper.init.js",
        "resources/js/jquery.flexslider-min.js",
        "resources/js/flexslider.init.js",
        "resources/js/feather.min.js",
        "resources/js/unicons.js",
        "resources/js/app.js"
    ],
    "public/js/front.js"
);

// Back End
mix.styles(
    [
        "resources/css/bootstrap.min.css",
        "resources/css/datatables.css",
        "resources/css/datatablesboostrap4.css",
        "resources/css/bootstrap-tagsinput.css",
        "resources/css/stylebackend.css",
        "resources/css/components.css"
    ],
    "public/css/backend.css"
);

mix.scripts(
    [
        "resources/js/jquery-3.5.1.min.js",
        "resources/js/bootstrap.min.js",
        "resources/js/nicescroll.js",
        "resources/js/stisla.js",
        "resources/js/cleave.min.js",
        "resources/js/phone-type-formatter.id.js",
        "resources/js/datatables.js",
        "resources/js/datatablesboostrap4.js",
        "resources/js/bootstrap-tagsinput.min.js",
        "resources/js/scripts.js"
    ],
    "public/js/backend.js"
);
