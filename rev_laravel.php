<?php

/*
Session 1
    composer create-project laravel-laravel your-project-name
    php artisan serve

    php artisan make:migration create_categories_table
    php artisan migrate
    php artisan migrate:rollback

    php artisan make:model Category
    php artisan make:controller CategoryController
*/
/*
Data base
    1- SELECT * FROM categories
    category::get()

    2- SELECT id, name FROM categories
    category::select('id','name')->get()

    3- SELECT id, name FROM categories WHERE id <= 5
    category::select('id','name')
    ->WHERE('id','<=','5')
    ->get()

    4- SELECT id, name FROM categories WHERE id <= 5 AND name LIKE "a%"
    category::select('id','name')
    ->WHERE('id','<=','5')
    ->WHERE('name','LIKE','a%')
    ->get()

    5- SELECT id, name FROM categories WHERE id <= 5 OR name LIKE "a%"
    category::select('id','name')
    ->WHERE('id','<=','5')
    ->orWHERE('name','LIKE','a%')
    ->get()

    6- SELECT id, name FROM categories WHERE id <= 5 ORDER BY name DESC
    category::select('id','name')
    ->WHERE('id','<=','5')
    ->orderBy('name','DESC')
    ->get()

    7- SELECT id, name FROM categories WHERE id <= 5 ORDER BY name DESC LIMT 10
    category::select('id','name')
    ->WHERE('id','<=','5')
    ->orderBy('name','DESC')
    ->take(10)
    ->get()

    7- SELECT id, name FROM categories WHERE id <= 5 ORDER BY name DESC LIMT 10
    category::select('id','name')
    ->WHERE('id','<=','5')
    ->orderBy('name','DESC')
    ->take(10)
    ->paginate(3)
    // {{ $categories->links()}}
*/

// start video 5
