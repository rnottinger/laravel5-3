<?php
//Auth::loginUsingId(1);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Lesson;
use App\Notifications\LessonPublished;
use App\Notifications\SubscriptionCanceled;
use App\User;

// employee login endpoint
Route::get('/portal',function() {
    return "portal";
});

// customer login endpoint
Route::get('/relations', function () {
    return "relations";
});


Route::get('/legit', function () {
    return "legit";
});
//Route::get('/', function () {
////    $user=User::first();
////    $lesson = Lesson::first();
//    // config/app.php  change name to update the heading in the body of the email
////    $user->notify(new LessonPublished($lesson));
//
//    //Auth::user()->notify(new SubscriptionCanceled);
//    return view('welcome');
//});

//Auth::routes();


//Route::group(['middleware' => ['web']], function () {
//});

//homestead.app/auth/admin/login
//homestead.app/auth/me/login

Route::group(['prefix' => 'auth'], function() {
    Route::group(['prefix' => 'portal'], function () {
        // Authentication Routes...
        $this->get('login', 'Auth\User\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\User\LoginController@login');
        $this->post('logout', 'Auth\User\LoginController@logout');

        // Registration Routes...
        $this->get('register', 'Auth\User\RegisterController@showRegistrationForm');
        $this->post('register', 'Auth\User\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\User\ForgotPasswordController@showLinkRequestForm');
        $this->post('password/email', 'Auth\User\ForgotPasswordController@sendResetLinkEmail');
        $this->post('password/reset', 'Auth\User\ResetPasswordController@reset');
        $this->get('password/reset/{token}', 'Auth\User\ResetPasswordController@showResetForm');
    });

    Route::group(['prefix' => 'relations'] , function () {
        // Authentication Routes...
        $this->get('login', 'Auth\Customer\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\Customer\LoginController@login');
        $this->post('logout', 'Auth\Customer\LoginController@logout');

        // Registration Routes...
        $this->get('register', 'Auth\Customer\RegisterController@showRegistrationForm');
        $this->post('register', 'Auth\Customer\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\Customer\ForgotPasswordController@showLinkRequestForm');
        $this->post('password/reset', 'Auth\Customer\ResetPasswordController@reset');
        $this->post('password/email', 'Auth\Customer\ForgotPasswordController@sendResetLinkEmail');
        $this->get('password/reset/{token}', 'Auth\Customer\ResetPasswordController@showResetForm');
    });


    Route::group(['prefix' => 'admin'] , function () {
        // Authentication Routes...
        $this->get('login', 'Auth\Admin\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\Admin\LoginController@login');
        $this->post('logout', 'Auth\Admin\LoginController@logout');

        // Registration Routes...
        $this->get('register', 'Auth\Admin\RegisterController@showRegistrationForm');
        $this->post('register', 'Auth\Admin\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm');
        $this->post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail');
        $this->get('password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm');
        $this->post('password/reset', 'Auth\Admin\ResetPasswordController@reset');                  // Reset the given user's password.


       /* // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout');

        // Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm');
        $this->post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');*/


    });
});

//Route::get('/home', 'HomeController@index');


