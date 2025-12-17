<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/php-projects', function () {
    return view('projects.php');
})->name('php.projects');

Route::get('/sql-projects', function () {
    return view('projects.sql');
})->name('sql.projects');

Route::get('/web-projects', function () {
    return view('projects.web');
})->name('web.projects');

Route::get('/interview-questions', function () {
    return view('interview.index');
})->name('interview.questions');

