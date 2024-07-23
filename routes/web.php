<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/about', function(){
    return view('about');
});

route::get('/contact', function(){
    return view('contact');
});

route::get('/pricing', function(){
    return view('pricing');
});

route::get('/faq', function(){
    return view('faq');
});

route::get('/blog-home', function(){
    return view('blog-home');
});

route::get('/blog-post', function(){
    return view('blog-post');
});

route::get('/portfolio-overview', function(){
    return view('portfolio-overview');
});

route::get('/portfolio-item', function(){
    return view('portfolio-item');
});
