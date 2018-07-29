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

Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

Route::get('dashboard/{user}', 'UserController@viewDashboard');

Route::post('/dashboard', 'UserController@update_avatar');

Route::get('/members', 'UserController@members');

Route::get('mypagination', 'UserController@myPagination');

Route::get('about', 'PagesController@about');

Route::get('pay', 'PagesController@pay');

Route::get('/form', function() {
    return View::make('form');
});

Route::post('upload/image',[
    'uses' => 'PostController@summernote',
    'as' => 'summernote.post'
]);

Route::get('/results', function(){

    $users = \App\User::where('firstname', 'like', '%' . request('query') . '%')->get();

    return view('results')->with('users', $users)
                        ->with('firstname', 'Search results : ' . request('query'))
                       // ->with('users', \App\User::take(5)->get())
                        ->with('query', request('query'));

});

Route::get('pagenotfound', [
    'as' => 'notfound', 
    'uses' => 'PagesController@pagenotfound'
    ]);

Route::get('/search','UserController@search');

//Route::get('/postnews', 'PostController@index');

Route::get('/standing', 'PagesController@standing');

//Route::get('/news', 'PostController@news');

Route::get('news/{postBySlug}', 'PostController@viewPost')->name('discussions.show');

	Route::get('edit/{id}', [
		'as' => 'get_edit_post',
		'uses' => 'PostController@getEditPost'
		]);


	Route::post('edit', [
		'as' => 'edit_post',
		'uses' => 'PostController@saveEditPost'
        ]);
        
Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin/home', [
        'uses' => 'AdminController@home',
        'as' => 'admin.home'
    ]);

    Route::get('/admin/members',[
        'uses' => 'AdminController@members',
        'as' => 'admin.members'
    ]);

    Route::get('/admin/user/delete/{id}',[
        'uses' => 'AdminController@userDelete',
        'as' => 'user.delete'
    ]);

    Route::get('/admin/user/edit/{id}',[
        'uses' => 'AdminController@userEdit',
        'as' => 'user.edit'
    ]);

    Route::post('/admin/user/update/{id}',[
        'uses' => 'AdminController@userUpdate',
        'as' => 'user.update'
    ]);

    Route::get('/admin/payment/index', [
        'uses' => 'PaymentController@index',
        'as' => 'payment.index'
    ]);

    Route::post('/admin/payment/update', [
        'uses' => 'PaymentController@update',
        'as' => 'payment.update'
    ]);


});

//Route::get('/admin', 'PostController@create');
//Route::post('/postnews', 'PostController@store');

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('news',[
        'uses' => 'PostController@news',
        'as' => 'discussion'
    ]);

   Route::get('/admin/discussion/create', [
    'uses' => 'PostController@create',
    'as' => 'discussions.create'
   ])->middleware('admin');
    
    Route::post('/admin/discussions/store', [
        'uses' => 'PostController@store',
        'as' => 'discussions.store'
    ]);
    

    Route::get('/discussions/edit/{id}', [
        'uses' => 'PostController@edit',
        'as' => 'discussions.edit'
    ]);


    Route::post('/discussions/update/{id}', [
        'uses' => 'PostController@update',
        'as' => 'discussions.update'
    ]);
 
    Route::post('/discussions/reply/{id}', [
         'uses' => 'PostController@reply',
         'as' => 'discussions.reply'  
    ]);

    Route::get('/reply/edit/{id}', [
        'uses' => 'PostController@edit_reply',
        'as' => 'reply.edit'
    ]);

    Route::post('/reply/update/{id}', [
        'uses' => 'PostController@update_reply',
        'as' => 'reply.update'
    ]);

    Route::delete('post', [

        'uses' => 'PostController@deletePost',
		'as' => 'delete.post'
		]);

    Route::delete('reply', [

        'uses' => 'PostController@deleteReply',
        'as' => 'delete.reply'
        ]);

   
    Route::get('user/profile', [
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'

    ]);
    Route::post('profile/update',[
        'uses' => 'ProfilesController@update',
        'as' => 'profile.update'
    ]);

    Route::get('profile/password/change', [
        'uses' => 'ProfilesController@passwordChange',
        'as' => 'profile.password.change'
    ]);

    Route::post('profile/password/update', [
        'uses' => 'ProfilesController@passwordUpdate',
        'as' => 'profile.password.update'
    ]);


});


