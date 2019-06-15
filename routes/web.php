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
//if want verify email
//Auth::routes(['verify' => true]);


Auth::routes();
//Profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update/{id}', 'ProfileController@update')->name('profile.update');
Route::get('/about','webController@about')->name('about');
Route::get('/contact','webController@contact')->name('contact');
Route::get('/privacy','webController@privacy')->name('privacy');

Route::get('/allposts','webController@allPosts')->name('allposts');

//dashboard
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/','webController@index')->name('index');

//search

Route::get('/search', 'webController@search')->name('search');
//allposts

Route::get('/post/create','postsController@create');
Route::post('/post/store','postsController@store')->name('post.store');
Route::get('/posts','postsController@index')->name('post.index');
Route::get('/post/edit/{id}','postsController@edit')->name('post.edit');
Route::post('/post/update/{id}','postsController@update')->name('post.update');
Route::get('/post/delete/{id}','postsController@destroy')->name('post.delete');
//allcategory

Route::get('/category/create','categoriesController@create');
Route::post('/category/store','categoriesController@store')->name('category.store');
Route::get('/categories','categoriesController@index')->name('category.index');
Route::get('/category/edit/{id}','categoriesController@edit')->name('category.edit');
Route::post('/category/update/{id}','categoriesController@update')->name('category.update');
Route::get('/category/delete/{id}','categoriesController@destroy')->name('category.delete');
// tags
Route::get('/tags','tagController@index')->name('tag.index');
Route::get('/tag/create','tagController@create')->name('tag.create');
Route::post('/tag/store','tagController@store')->name('tag.store');
Route::get('/tag/edit/{id}','tagController@edit')->name('tag.edit');
Route::post('/tag/update/{id}','tagController@update')->name('tag.update');
Route::get('/tag/delete/{id}','tagController@destroy')->name('tag.delete');
//users
Route::get('/users','UsersController@index')->name('user.index');
Route::get('/user/create','UsersController@create')->name('user.create');
Route::post('/user/store','UsersController@store')->name('user.store');
Route::get('/user/edit/{id}','UsersController@edit')->name('user.edit');
Route::post('/user/update/{id}','UsersController@update')->name('user.update');
Route::get('/user/delete/{id}','UsersController@destroy')->name('user.delete');
Route::get('/user/admin/{id}','UsersController@admin')->name('user.admin');
Route::get('/user/notadmin/{id}','UsersController@notAdmin')->name('user.notadmin');

// settings
Route::get('/settings','settingsController@index')->name('setting.index');
Route::post('/settings/store','settingsController@store')->name('setting.store');

Route::post('/setting/update','settingsController@update')->name('setting.update');

//admin page
Route::get('/admin', 'HomeController@dashboard')->name('dashboard');

//web route
Route::get('/{slug}','webController@showPost')->name('showpost');
Route::get('/category/{id}','webController@showCategory')->name('showCategory');
Route::get('/tag/{id}','webController@showTag')->name('showTag');
Route::get('/user/{id}','webController@users')->name('users');
Route::post('/store-newsletter','webController@store')->name('newsletter');


