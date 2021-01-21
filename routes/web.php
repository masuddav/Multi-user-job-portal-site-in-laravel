<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','JobController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//admin dashboard
Route::group(['middleware'=>['auth','admin']],function(){

Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

});
// Jobs Profile


Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');

Route::group(['middleware'=>['auth','employer']],function(){
Route::get('/jobs/create', 'JobController@create')->name('jobs.create');
Route::post('/jobs/store', 'JobController@store')->name('jobs.store');
Route::get('jobs/edit/','JobController@edit')->name('jobs.edit');
Route::get('jobs/update/','JobController@update')->name('jobs.update');
Route::delete('/jobs/destroy/{id}','JobController@destroy')->name('jobs.delete');
Route::get('/jobs/myjobs', 'JobController@myjobs')->name('jobs.myjobs');
});
Route::post('/jobs/apply/{id}', 'JobController@apply')->name('jobs.apply');
Route::get('jobs/applicants', 'JobController@applicants')->name('jobs.applicants');
Route::get('jobs/alljobs', 'JobController@alljobs')->name('alljobs');
Route::post('/applications/{id}','JobController@apply')->name('apply');

//Search Jobs with Vue.js
Route::get('/jobs/search','Jobcontroller@searchJob');

//Save and Unsave Job
Route::post('/save/{id}','FavouriteController@saveJob');

Route::post('/unsave/{id}','FavouriteController@unSavedJob');

// Comapny Profile
Route::get('/company/{id}/{company}', 'CompanyController@index')->name('company.index');
Route::get('/company/create','CompanyController@create')->name('company.create');
Route::post('/company/store','CompanyController@store')->name('company.store');
Route::post('/company/coverphoto','CompanyController@coverphoto')->name('company.coverphoto');
Route::post('/company/logo','CompanyController@logo')->name('company.logo');
Route::get('/company','CompanyController@company')->name('company');
// User Profile
Route::get('/user/profile', 'UserProfileController@index')->name('user.profile');
Route::post('profile/store', 'UserProfileController@store')->name('profile.store');
Route::post('profile/coverletter', 'UserProfileController@coverletter')->name('profile.coverletter');
Route::post('profile/resume', 'UserProfileController@resume')->name('profile.resume');
Route::post('profile/avatar', 'UserProfileController@avatar')->name('profile.avatar');

// Employer Profile
Route::view('employer/profile','auth.emp-register')->name('employer.registration');
Route::post('employer/profile/store','EmployerProfileController@store')->name('employer.store');
// category index

Route::get('/caterory/{id}','CategoryController@index')->name('category.index');
//Email Refer route
Route::post('/email/job','EmailController@send')->name('mail');
