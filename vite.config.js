
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss',
                'resources/js/app.js',
               'resources/css/style.css',
                'resources/js/main.js',
                'resources/lib/easing/easing.min.js',
                'resources/lib/owlcarousel/owl.carousel.min.js',
                'resources/lib/tempusdominus/js/moment.min.js',
                'resources/lib/tempusdominus/js/moment-timezone.min.js',
                'resources/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',
                'resources/lib/owlcarousel/assets/owl.carousel.min.css',
                'resources/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',],
            refresh: true,
        }),
    ],
 
    build: {
        outDir: 'public/build', 
        
    }

});