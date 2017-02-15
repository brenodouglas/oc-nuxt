<?php

use RainLab\Blog\Models\Category;

Route::get('api/v1/category', function() {
    $categories = Category::all();
    return $categories->toArray();
});
