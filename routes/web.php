<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use App\Models\Officials;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class,'index']);
Route::post('/',  [HomeController::class,'store']);
Route::post('/custom',  [HomeController::class,'sendCustomMessage']);

Route::get('/',function(){
    $posts = Post::orderBy('created_at','desc')->paginate(4);
    return view('home',compact('posts'));
});

Route::get('post/{slug}', function($slug){
	$post = Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});



Route::view('/blog','blog');
Route::view('/officials','officials');
Route::view('/sms','sms');

Route::get('/blog',function(){
    $posts = Post::orderBy('created_at','desc')->paginate(8);
    return view('blog',compact('posts'));
});

Route::get('/downloads',function(){
    $pages = Page::orderBy('created_at','desc')->paginate(10);
    return view('downloads',compact('pages'));
});

Route::get('/officials',function(){
    $officials = Officials::orderBy('created_at','desc')->paginate(8);
    return view('officials',compact('officials'));
});

Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('contact', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);

Route::any('send-sms',[SMSController::class, 'send']);

Route::get('/sms', [HomeController::class, 'show'])->name('home');
Route::post('/sms', [HomeController::class, 'storePhoneNumber']);
Route::post('/custom', [HomeController::class, 'sendCustomMessage']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('notifications', function(){
        return view('notifications');
    });
    Voyager::routes();
});