<?php

// Route::get('/hello', 'WelcomeController@hello');

Route::get('/', 'HomeController');
Route::get('/dasboard', 'DasboardController');

//About Page
Route::get('/about', 'AboutController');

//Page Guide
Route::get('/guide', 'GuideController');

//Page Contact
Route::get('/contact', 'ContactController');
Route::post('/send', 'ContactController@send');

//Page Article
Route::get('/article/{id}', 'ArticleController');


//Page Me
Route::get('/me', 'MeController');
Route::get('/me/edit/{id}', 'MeController@edit');
Route::post('/me/update/{id}', 'MeController@update');

//Page Purchase
Route::get('/purchase', 'BuyController');


/////////////////////////////////////////GATE ADMIN////////////////////////////////////////


//ABOUT
Route::get('/manageabout', 'AdminController@manage_about');
Route::get('/about/edit/{id}', 'AdminController@edit_about');
Route::post('/updateabout/{id}', 'AdminController@update_about');


//ARTIKEL
Route::get('/manage', 'AdminController@manage')->name('manage');
Route::get('/manage/add', 'AdminController@add');
Route::post('/create', 'AdminController@create');
Route::get('/manage/edit/{id}', 'AdminController@edit');
Route::post('/update/{id}', 'AdminController@update');
Route::get('/manage/delete/{id}', 'AdminController@delete');
Route::get('/cetak_pdf', 'AdminController@cetak_pdf');


//MESSAGE
Route::get('/message', 'AdminController@manage_mes')->name('manageMes');
Route::get('/message/delete/{id}', 'AdminController@delete_mes');
Route::get('/cetakmsg_pdf', 'AdminController@cetak_pdf_mes');


//USER
Route::get('/manageuser', 'AdminController@manage_User')->name('manageUser');
Route::get('/manageuser/add', 'AdminController@add_User');
Route::post('/createuser', 'AdminController@create_User');
Route::get('/manageuser/edit/{id}', 'AdminController@edit_User');
Route::post('/manageuser/update/{id}', 'AdminController@update_User');
Route::get('/manageuser/delete/{id}', 'AdminController@delete_User');
Route::get('/cetakuser_pdf', 'AdminController@cetak_pdf_User');


Auth::routes();

Route::get('/home', 'HomeController')->name('home');
