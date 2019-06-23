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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/','PagesController@index');

Route::get('/about',[
  'uses' => 'PagesController@about',
  'as' => 'about'
]);

Route::get('/select/{id}',[
  'uses' => 'PagesController@show',
  'as' => 'select'
]);

Route::post('/confirm',[
  'uses' => 'PagesController@postConfirm',
  'as' => 'confirm'
]);

Route::post('/complete',[
  'uses' => 'PagesController@postComplete',
  'as' => 'complete'
]);

Route::get('/complete',[
  'uses' => 'PagesController@getComplete',
  'as' => 'complete'
]);

// Route::get('/product','PagesController@product');

Route::get('/business',[
  'uses' => 'PagesController@business',
  'as' => 'business'
]);


//Route::get('/contact_confirm',[
//'uses' => 'PagesController@getConfirm',
//'as' => 'contact_confirm'
//]);

Route::post('/contact_confirm',[
  'uses' => 'PagesController@postContact',
  'as' => 'contact_confirm'
]);

Route::post('/finish', [
  'uses' => 'PagesController@finish',
  'as' => 'finish'
]);


Route::group(['prefix' => 'user'], function() {

  Route::group(['middleware' => 'guest'], function(){

    Route::get('/signup',[
      'uses' => 'UserController@getSignup',
      'as' => 'user.signup'
    ]);

    Route::post('/signup',[
      'uses' => 'UserController@postSignup',
      'as' => 'user.signup'
    ]);

    Route::get('/signin',[
      'uses' => 'UserController@getSignin',
      'as' => 'user.signin'
    ]);

    Route::post('/signin',[
      'uses' => 'UserController@postSignin',
      'as' => 'user.signin'
    ]);
    //middleware(guest)終了
  });

  Route::group(['middleware' => 'auth'], function(){

    Route::get('/profile',[
      'uses' => 'UserController@getProfile',
      'as' => 'user.profile'
    ]);

    // ログアウト
    Route::get('/logout',[
      'uses' => 'UserController@getLogout',
      'as' => 'user.logout'
    ]);

    Route::group(['prefix' => 'profile'], function() {

      Route::get('/account',[
        'uses' => 'UserController@getAccount',
        'as' => 'user.profile.account'
      ]);

      Route::post('/age',[
        'uses' => 'UserController@editAge',
        'as' => 'user.profile.age'
      ]);

      Route::post('/tel',[
        'uses' => 'UserController@editTel',
        'as' => 'user.profile.tel'
      ]);

      Route::post('/email',[
        'uses' => 'UserController@editEmail',
        'as' => 'user.profile.email'
      ]);

      Route::post('/password',[
        'uses' => 'UserController@editPassword',
        'as' => 'user.profile.password'
      ]);

      Route::post('/address',[
        'uses' => 'UserController@editAddress',
        'as' => 'user.profile.address'
      ]);

      Route::get('/record',[
        'uses' => 'UserController@getRecord',
        'as' => 'user.profile.record'
      ]);

    });

    //middleware(auth)終了
  });

});

Route::group(['prefix' => 'uploader'], function() {

  Route::get('/uploader',[
    'uses' => 'UploaderController@getUploader',
    'as' => 'uploader.uploader'
  ]);

  Route::get('/confirm',[
    'uses' => 'UploaderController@getConfirm',
    'as' => 'uploader.confirm'
  ]);

  Route::post('/confirm', [
    'uses' => 'UploaderController@postConfirm',
    'as' => 'uploader.confirm'
  ]);

  Route::post('/finish', [
    'uses' => 'UploaderController@finish',
    'as' => 'uploader.finish'
  ]);

});


Route::group(['prefix' => 'product'], function() {

  Route::get('/cloth',[
    'uses' => 'ProductController@getCloth',
    'as' => 'product.cloth'
  ]);

  Route::get('/design',[
    'uses' => 'ProductController@getDesign',
    'as' => 'product.design'
  ]);

  Route::post('/design',[
    'uses' => 'ProductController@postDesign',
    'as' => 'product.design'
  ]);

  Route::post('/confirm',[
    'uses' => 'ProductController@postConfirm',
    'as' => 'product.confirm'
  ]);

});
