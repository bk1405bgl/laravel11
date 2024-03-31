<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '50k'
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '40k'
        ],
        [
            'id' => 3,
            'title' => 'Designer',
            'salary' => '30k'
        ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '50k'
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '40k'
        ],
        [
            'id' => 3,
            'title' => 'Designer',
            'salary' => '30k'
        ]
        ];
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
