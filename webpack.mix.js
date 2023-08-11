const mix = require('laravel-mix');

mix.styles('public/css/bootstrap.min.css', 'public/css')
    .styles('public/css/roboto.css', 'public/css')
    .styles('public/css/material-symbols-outlined.css', 'public/css')
    .styles('public/css/fontawesome.min.css', 'public/css')
    .styles('public/css/bootstrap-icons.css', 'public/css')
    .scripts('https://code.jquery.com/jquery-3.7.0.min.js', 'public/js')
    .scripts('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', 'public/js')
    .scripts('https://kit.fontawesome.com/your-font-awesome-kit.js', 'public/js')
    .scripts('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', 'public/js')
    .scripts('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.js', 'public/js');
