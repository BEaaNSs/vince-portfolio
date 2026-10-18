<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio', ['projects' => config('portfolio.projects', [])]);
})->name('home');

Route::get('/projects/{slug}', function (string $slug) {
    $project = collect(config('portfolio.projects', []))->firstWhere('slug', $slug);
    abort_unless($project, 404);
    return view('project', compact('project'));
})->name('projects.show');
