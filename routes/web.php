<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/create-job-post', 'JobPostController@create')->name('job.create');
Route::post('/job-post/store', 'JobPostController@store')->name('job.post.store');

Route::get('/user/profile', 'ApplicantDetailsController@index')->name('applicant.profile');
Route::post('/user/profile/store', 'ApplicantDetailsController@update')->name('applicant.profile.update');

Route::get('/all-job-post', 'JobPostController@alljob')->name('all.job');
Route::get('/view-job-post/{id}', 'JobPostController@viewjob')->name('view.job');
Route::get('/application/store', 'JobPostController@viewjob')->name('view.job');
Route::post('job-application-store/{job_id}/{company_id}', 'JobApplicationController@store')->name('job.application.store');
